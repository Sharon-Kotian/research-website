<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;
use Carbon\Carbon;
use Mail;
use App\Mail\OTP;

class UserController extends Controller
{
    public function register_view()
    {
        return view('register');
    }

    public function dashboard(Request $request)
    {
        return view('user.dashboard');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            //'org_name' => 'required',
            //'gstin' => 'required',
            ]);

            if($request->password==$request->confirmpassword)
        {
            $admin = New User();
            $admin->firstName=$request->firstName;
            $admin->lastName=$request->lastName;
            $admin->email=$request->email;
            $admin->password = Hash::make($request->password);
            //$admin->org_name=$request->org_name;
            //$admin->gstin=$request->gstin;

            $admin->save();
            return redirect('login')->with(['success'=> 'Admin Added Succesfully.']);
        }
        else
        {
            return redirect()->back()->with(['loginError'=> 'Password and Confirm Passwords do not match.']);
        }

           

            //return redirect('admin/register_pass/'.$id);
            //return redirect('admin/register_profile/'.$id)->with('success', "Success");       
    }


    public function login_view(Request $request)
    {
        return view('login');
    }

    public function profile_view(Request $request)
    {
        return view('user.profile');
    }

    public function login(Request $request)
    {
        if(Auth::guard('admin')->check())
        {
            return redirect('/user/dashboard');
        }
        else
        {
            return view('login');
        }
    }


    public function loginAttempt(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];

        //$status = DB::table('new_users')->where('email',$email);
        //dd($status);
        $credentials=$request->validate([
            'email' => ['required'],
            'password' => ['required'],
            
            ]);

        $attemptinfo = ['email'=>$email,'password'=>$password];
        
        //if($status==1)
        //{
            if(auth()->guard('admin')->attempt($attemptinfo))
            {
                $id = DB::table('users')->where('email',$email)->value('id');
                $ad=User::find($id);

                //$ad->last_login=Carbon::now();
                $ad->update();
                if($ad->role=='admin'){
                    return redirect('admin/basicSearchView');
                }
                else{
                    return redirect('user/dashboard');
                }
                

            }
            else
            {
                return redirect('login')->with('loginError', "Enter valid credentials.");
            }
        /*}
        
        else
        {
            return redirect('admin/login')->with('loginError', "You are not enabled");
        }*/
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/login');
    }

    public function forgot()
    {
        Auth::logout();
        return view('forgotPassword');
    }

    public function forgotPassword(Request $request)
    {
        $email = $request['email'];        

        $id=DB::table('users')->where('email',$email)->value('id');
        //dd($id);
        $user=User::find($id);
        //dd($user->email);

        
        
        if($user)
        {
            $code=rand(100000,999999);
            Mail::to($email)->send(new OTP($code)); 

            $user->otp=Hash::make($code);
            $user->update();

            //return view('recoverPassword')->with('user',$user);
            return view('otpPassword')->with('user',$user);
        }
        else
        {
            return redirect()->back()->with(['loginError'=> 'Please enter a valid email ID']);   
        }
        
        //return view('recoverPassword');
    }

    public function otpPassword(Request $request)
    {
        $id=$request->id;
        $user=User::find($id);
        $otp123=$request->otp1.$request->otp2.$request->otp3;
        if(Hash::check($otp123,$user->otp))
        {
            return view('recoverPassword')->with('user',$user); 
        }
        else
        {
            return redirect('admin/forgot')->with(['loginError'=> 'Please enter correct OTP']); 
        }
    }

    public function changePassword(Request $request)
    {
        $password=$request['password'];
        $id=$request['id'];
        $confirmpassword=$request['confirmpassword'];

        if($password==$confirmpassword)
        {
            //$id=DB::table('admins')->where('email',$email)->value('id');
            //dd($id);
            //$user=DB::table('users')->find($id)->first();
            $user=User::find($id);
            //dd($user);

            $user->password=Hash::make($password);
            $user->update();

            return redirect('user/login')->with(['success'=> 'Password changed successfully!']);   
            //return redirect('user/login')->with(['success'=> 'Password changed successfully!']);   
        }
        else
        {
            $id=DB::table('users')->where('email',$email)->value('id');
            //dd($id);
            //$user=DB::table('users')->find($id)->first();
            $user=User::find($id)->first();
            //return redirect()->back()->with(['loginError'=> 'New Password and Confirm Password do not match']);   
            return redirect('user/forgot')->with(['loginError'=> 'New Password and Confirm Password do not match','user'=>$user]);   
            
        }
    }

    public function getProfileEdit(Request $request)
    {
       $id = $request->id;

       $ProfileDetails=User::find($id);
        return view('user.profile')->with('ProfileDetails',$ProfileDetails);
    }


    public function postProfileEdit(request $request)
    {
       $id = $request->id;
        $profile=User::find($id);

        $profile->firstName=$request->firstName;
        $profile->lastName=$request->lastName;
        $profile->gender=$request->gender;
        $profile->employee_id=$request->employee_id;
        $profile->aadhar_pan_id=$request->aadhar_pan_id;
        $profile->designation=$request->designation;
        $profile->date_of_joining=$request->date_of_joining;
        $profile->domain_of_expertise=$request->domain_of_expertise;
        
        
        $profile->save();
        return redirect('user/profile/'.$id)->with(['success' => 'Profile Updated successfully.']);
    }

}
