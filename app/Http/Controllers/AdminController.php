<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function basicSearchView(Request $request)
    {
        return view('admin.basicSearch');
    }

    public function basicSearchDashboard(Request $request)
    {
        return view('admin.name');
    }

    public function usersAllSearch(Request $request)
    {
        //$profile=User::find($id);
        $users=DB::select("SELECT * FROM users");
        
        return view('admin.usersAllSearch')->with('users',$users);
    }

    public function nameWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.nameWiseSearch')->with('us',$us);
    }

    public function nameSearch(Request $request)
    {
        //$profile=User::find($id);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        $users=DB::select("SELECT * FROM users where id=".$request->name_search);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.nameWiseSearch')->with('users',$users)->with('us',$us);
    }





    public function educationWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.educationWiseSearch')->with('us',$us);
    }

    public function educationSearch(Request $request)
    {
        //$profile=User::find($id);

       // dd($request->name_search);
        $year_search=$request->year_search;

        $years=explode("-",$year_search);
        //$s1="()";
        if($request->domain_search)
       {
           $s1=implode("','",$request->domain_search);
           $s1='(\''.$s1.'\')';
        }

        if($request->name_search==null){
            if($request->year_search=="all"){
                if($request->domain_search==null){
                    $users=DB::select("SELECT * FROM users,education where users.id=education.user_id");
                }
                else{
                    $users=DB::select("SELECT * FROM users,education where  users.id=education.user_id and field_of_study in $s1");
                }
            }
            else{
                if($request->domain_search==null){
                    $users=DB::select("SELECT * FROM users,education where  users.id=education.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                }
                else{
                    $users=DB::select("SELECT * FROM users,education where  users.id=education.user_id and field_of_study in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                }
            }
        }
        else{
            if($request->year_search=="all"){
                if($request->domain_search==null){
                    $users=DB::select("SELECT * FROM users,education where users.id=education.user_id");
                }
                else{
                    $users=DB::select("SELECT * FROM users,education where users.id=education.user_id and field_of_study in $s1");
                }
            }
            else{
                if($request->domain_search==null){
                    $users=DB::select("SELECT * FROM users,education where users.id=education.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                }
                else{
                    $users=DB::select("SELECT * FROM users,education where users.id=education.user_id and field_of_study in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                }
            }
        }

        dd($users);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        //$users=DB::select("SELECT * FROM users,education where users.id=education.user_id and education.user_id=".$request->name_search." and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.educationWiseSearch')->with('users',$users)->with('us',$us);
    }

    public function yearSearch(Request $request)
    {
        //$profile=User::find($id);
        $year_search=$request->year_search;

        $years=explode("-",$year_search);
        

        if($request->type=="papers"){
            $papers=DB::select("SELECT users.id,users.firstName,users.lastName,papers.paper_topic,papers.paper_link,papers.publication_name FROM users,papers where users.id=papers.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
            return view('admin.basicSearch')->with('papers',$papers);
        }
        elseif($request->type=="patents"){
            $patents=DB::select("SELECT users.id,users.firstName,users.lastName,patents.patent_title,patents.patent_link,patents.granting_agency FROM users,patents where users.id=patents.user_id and year=$years[0]");
            return view('admin.basicSearch')->with('patents',$patents);
        }
        else{
            $books=DB::select("SELECT users.id,users.firstName,users.lastName,books.book_title,books.book_link,books.publication_name FROM users,books where users.id=books.user_id and year_of_publication=$years[0]");
            return view('admin.basicSearch')->with('books',$books);
        }
        //$users=DB::select("SELECT users.id,users.firstName,users.lastName,users.email,users.gender,users.employee_id,users.designation,users.date_of_joining,users.domain_of_expertise FROM users,education where users.id=education.user_id and end_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        
        //return view('admin.basicSearch')->with('users',$users);
    }

    public function domainSearch(Request $request)
    {
        //$profile=User::find($id);
        //dd($request->domain);

        $s1="(NULL)";
       if($request->domain)
       {
           $s1=implode("','",$request->domain);
           $s1='(\''.$s1.'\')';
        }
        $users=DB::select("SELECT * FROM users where domain_of_expertise in $s1");
        //dd($users);
        
        return view('admin.basicSearch')->with('users',$users);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
