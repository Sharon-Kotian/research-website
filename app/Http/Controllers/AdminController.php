<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Paper;
use Illuminate\Http\Request;
use DB;
use Response;
use File;
use Storage;

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

        //dd($request->name_search);
        if($request->name_search=='all'){
            if($request->year_search=='null'){
                if($request->domain_search==null){
                    $users=DB::select("SELECT * FROM users,education where users.id=education.user_id");
                    //dd('no records');
                    //dd($users);
                }
                else{
                    $users=DB::select("SELECT * FROM users,education where  users.id=education.user_id and field_of_study in $s1");
                    //dd('no records1');
                    //dd($users);
                }
            }
            else{
                if($request->domain_search==null){
                    $users=DB::select("SELECT * FROM users,education where  users.id=education.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                    //dd('no records2');\
                    //dd($users);
                }
                else{
                    $users=DB::select("SELECT * FROM users,education where  users.id=education.user_id and
                     field_of_study in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                     //dd('no records3');
                     //dd($users);
                }
            }
        }
        else{
            if($request->year_search=="null"){
                if($request->domain_search==null){

                    $users=DB::select("SELECT * FROM users,education where users.id=education.user_id and users.id=".$request->name_search);
                    //dd('no records4');
                    //dd($users);
                }
                else{
                    $users=DB::select("SELECT * FROM users,education where users.id=education.user_id and field_of_study in $s1 and users.id=".$request->name_search);
                    //dd('no records5');
                    //dd($users);
                }
            }
            else{
                if($request->domain_search==null){
                    $users=DB::select("SELECT * FROM users,education where users.id=education.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                    //dd('no records6');
                    //dd($users);
                }
                else{
                    $users=DB::select("SELECT * FROM users,education where users.id=education.user_id and field_of_study in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                    //dd('no records7');
                    //dd($users);
                }
            }
        }

        //dd($users);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        //$users=DB::select("SELECT * FROM users,education where users.id=education.user_id and education.user_id=".$request->name_search." and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.educationWiseSearch')->with('users',$users)->with('us',$us);
    }





    public function consultancyWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.consultancyWiseSearch')->with('us',$us);
    }

    public function consultancySearch(Request $request)
    {
        //$profile=User::find($id);

       // dd($request->name_search);
        $year_search=$request->year_search;

        $years=explode("-",$year_search);
        //$s1="()";
        

        //dd($request->name_search);
        if($request->name_search=='all'){
            if($request->year_search=='null'){
                
                    $users=DB::select("SELECT * FROM users,consultancies where users.id=consultancies.user_id");
                    //dd('no records');
                    //dd($users);
               
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,consultancies where  users.id=consultancies.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                    //dd('no records2');\
                    //dd($users);
               
            }
        }
        else{
            if($request->year_search=="null"){
                
                    $users=DB::select("SELECT * FROM users,consultancies where users.id=consultancies.user_id and users.id=".$request->name_search);
                    //dd('no records4');
                    //dd($users);
                
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,consultancies where users.id=consultancies.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                    //dd('no records6');
                    //dd($users);
                
            }
        }

        //dd($users);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        //$users=DB::select("SELECT * FROM users,education where users.id=education.user_id and education.user_id=".$request->name_search." and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.consultancyWiseSearch')->with('users',$users)->with('us',$us);
    }












    public function membershipWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.membershipWiseSearch')->with('us',$us);
    }

    public function membershipSearch(Request $request)
    {
        //$profile=User::find($id);

       // dd($request->name_search);
        $year_search=$request->year_search;

        $years=explode("-",$year_search);
        //$s1="()";
        

        //dd($request->name_search);
        if($request->name_search=='all'){
            if($request->year_search=='null'){
                
                    $users=DB::select("SELECT * FROM users,memberships where users.id=memberships.user_id");
                    //dd('no records');
                    //dd($users);
               
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,memberships where  users.id=memberships.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                    //dd('no records2');\
                    //dd($users);
               
            }
        }
        else{
            if($request->year_search=="null"){
                
                    $users=DB::select("SELECT * FROM users,memberships where users.id=memberships.user_id and users.id=".$request->name_search);
                    //dd('no records4');
                    //dd($users);
                
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,memberships where users.id=memberships.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                    //dd('no records6');
                    //dd($users);
                
            }
        }

        //dd($users);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        //$users=DB::select("SELECT * FROM users,education where users.id=education.user_id and education.user_id=".$request->name_search." and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.membershipWiseSearch')->with('users',$users)->with('us',$us);
    }










    public function fdpWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.fdpWiseSearch')->with('us',$us);
    }

    public function fdpSearch(Request $request)
    {
        //$profile=User::find($id);

       // dd($request->name_search);
        $year_search=$request->year_search;

        $years=explode("-",$year_search);
        //$s1="()";
        

        //dd($request->name_search);
        if($request->name_search=='all'){
            if($request->year_search=='null'){
                
                    $users=DB::select("SELECT * FROM users,f_d_p_s where users.id=f_d_p_s.user_id");
                    //dd('no records');
                    //dd($users);
               
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,f_d_p_s where  users.id=f_d_p_s.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                    //dd('no records2');\
                    //dd($users);
               
            }
        }
        else{
            if($request->year_search=="null"){
                
                    $users=DB::select("SELECT * FROM users,f_d_p_s where users.id=f_d_p_s.user_id and users.id=".$request->name_search);
                    //dd('no records4');
                    //dd($users);
                
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,f_d_p_s where users.id=f_d_p_s.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                    //dd('no records6');
                    //dd($users);
                
            }
        }

        //dd($users);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        //$users=DB::select("SELECT * FROM users,education where users.id=education.user_id and education.user_id=".$request->name_search." and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.fdpWiseSearch')->with('users',$users)->with('us',$us);
    }















    public function mdpWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.mdpWiseSearch')->with('us',$us);
    }

    public function mdpSearch(Request $request)
    {
        //$profile=User::find($id);

       // dd($request->name_search);
        $year_search=$request->year_search;

        $years=explode("-",$year_search);
        //$s1="()";
        

        //dd($request->name_search);
        if($request->name_search=='all'){
            if($request->year_search=='null'){
                
                    $users=DB::select("SELECT * FROM users,m_d_p_s where users.id=m_d_p_s.user_id");
                    //dd('no records');
                    //dd($users);
               
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,m_d_p_s where  users.id=m_d_p_s.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                    //dd('no records2');\
                    //dd($users);
               
            }
        }
        else{
            if($request->year_search=="null"){
                
                    $users=DB::select("SELECT * FROM users,m_d_p_s where users.id=m_d_p_s.user_id and users.id=".$request->name_search);
                    //dd('no records4');
                    //dd($users);
                
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,m_d_p_s where users.id=m_d_p_s.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                    //dd('no records6');
                    //dd($users);
                
            }
        }

        //dd($users);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        //$users=DB::select("SELECT * FROM users,education where users.id=education.user_id and education.user_id=".$request->name_search." and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.mdpWiseSearch')->with('users',$users)->with('us',$us);
    }








    public function certificationWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.certificationWiseSearch')->with('us',$us);
    }

    public function certificationSearch(Request $request)
    {
        //$profile=User::find($id);

       // dd($request->name_search);
        $year_search=$request->year_search;

        $years=explode("-",$year_search);
        //$s1="()";
        

        //dd($request->name_search);
        if($request->name_search=='all'){
            if($request->year_search=='null'){
                
                    $users=DB::select("SELECT * FROM users,certifications where users.id=certifications.user_id");
                    //dd('no records');
                    //dd($users);
               
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,certifications where  users.id=certifications.user_id and issue_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                    //dd('no records2');\
                    //dd($users);
               
            }
        }
        else{
            if($request->year_search=="null"){
                
                    $users=DB::select("SELECT * FROM users,certifications where users.id=certifications.user_id and users.id=".$request->name_search);
                    //dd('no records4');
                    //dd($users);
                
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,certifications where users.id=certifications.user_id and issue_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                    //dd('no records6');
                    //dd($users);
                
            }
        }

        //dd($users);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        //$users=DB::select("SELECT * FROM users,education where users.id=education.user_id and education.user_id=".$request->name_search." and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.certificationWiseSearch')->with('users',$users)->with('us',$us);
    }












    public function conferenceWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.conferenceWiseSearch')->with('us',$us);
    }

    public function conferenceSearch(Request $request)
    {
        //$profile=User::find($id);

       // dd($request->name_search);
        $year_search=$request->year_search;

        $years=explode("-",$year_search);
        //$s1="()";
        

        //dd($request->name_search);
        if($request->name_search=='all'){
            if($request->year_search=='null'){
                
                    $users=DB::select("SELECT * FROM users,conference_proceedings where users.id=conference_proceedings.user_id");
                    //dd('no records');
                    //dd($users);
               
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,conference_proceedings where  users.id=conference_proceedings.user_id and conference_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                    //dd('no records2');\
                    //dd($users);
               
            }
        }
        else{
            if($request->year_search=="null"){
                
                    $users=DB::select("SELECT * FROM users,conference_proceedings where users.id=conference_proceedings.user_id and users.id=".$request->name_search);
                    //dd('no records4');
                    //dd($users);
                
            }
            else{
                
                    $users=DB::select("SELECT * FROM users,conference_proceedings where users.id=conference_proceedings.user_id and conference_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                    //dd('no records6');
                    //dd($users);
                
            }
        }

        //dd($users);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        //$users=DB::select("SELECT * FROM users,education where users.id=education.user_id and education.user_id=".$request->name_search." and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.conferenceWiseSearch')->with('users',$users)->with('us',$us);
    }











    















    public function patentWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.patentWiseSearch')->with('us',$us);
    }

    public function patentSearch(Request $request)
    {
        //$profile=User::find($id);

       // dd($request->name_search);
        $year_search=$request->year_search;

        //$years=explode("-",$year_search);
        //$s1="()";
        if($request->domain_search)
       {
           $s1=implode("','",$request->domain_search);
           $s1='(\''.$s1.'\')';
        }
        if($request->status_search)
       {
           $s2=implode("','",$request->status_search);
           $s2='(\''.$s2.'\')';
        }
        // else{
        //     $s2=null;
        // }

        //dd($request->name_search);
        if($request->name_search=='all'){
            if($request->year_search=='null'){
                        if($request->domain_search==null){


                                        if($request->status_search==null){
                                            $users=DB::select("SELECT * FROM users,patents where users.id=patents.user_id");
                                            //dd('no records');
                                            //dd($users);
                                        }
                                        else{
                                            $users=DB::select("SELECT * FROM users,patents where  users.id=patents.user_id and status in $s2");

                                            //dd('no records1');
                                            //dd($s2);
                                            //dd($users);
                                        }




                            //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                            //dd('no records');
                            //dd($users);
                        }
                        else{


                            if($request->status_search==null){
                                $users=DB::select("SELECT * FROM users,patents where users.id=patents.user_id and domain in $s1");
                                //dd('no records');
                                //dd($users);
                            }
                            else{
                                $users=DB::select("SELECT * FROM users,patents where  users.id=patents.user_id and status in $s2 and domain in $s1");
                                //dd('no records1');
                                //dd($users);
                            }



                            //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                            //dd('no records1');
                            //dd($users);
                        }
            }
            else{
                    if($request->domain_search==null){


                        if($request->status_search==null){
                            $users=DB::select("SELECT * FROM users,patents where users.id=patents.user_id and year=$year_search");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,patents where  users.id=patents.user_id and status in $s2 and year=$year_search");
                            //dd('no records1');
                            //dd($users);
                        }
    
    
    
    
                        //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                        //dd('no records');
                        //dd($users);
                    }
                    else{
    
    
                        if($request->status_search==null){
                            $users=DB::select("SELECT * FROM users,patents where users.id=patents.user_id and domain in $s1 and year=$year_search");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,patents where  users.id=patents.user_id and status in $s2 and domain in $s1 and year=$year_search");
                            //dd('no records1');
                            //dd($users);
                        }
    
    
    
                        //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                        //dd('no records1');
                        //dd($users);
                    }
                }
        }
            else{


                if($request->year_search=='null'){
                    if($request->domain_search==null){


                                    if($request->status_search==null){
                                        $users=DB::select("SELECT * FROM users,patents where users.id=patents.user_id and users.id=".$request->name_search);
                                        //dd('no records');
                                       //dd($users);
                                    }
                                    else{
                                        $users=DB::select("SELECT * FROM users,patents where  users.id=patents.user_id and status in $s2 and users.id=".$request->name_search);
                                        //dd('no records1');
                                        //dd($users);
                                    }




                        //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                        //dd('no records');
                        //dd($users);
                    }
                    else{


                        if($request->status_search==null){
                            $users=DB::select("SELECT * FROM users,patents where users.id=patents.user_id and domain in $s1 and users.id=".$request->name_search);
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,patents where  users.id=patents.user_id and status in $s2 and domain in $s1 and users.id=".$request->name_search);
                            //dd('no records1');
                            //dd($users);
                        }



                        //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                        //dd('no records1');
                        //dd($users);
                    }
        }
        else{
                if($request->domain_search==null){


                    if($request->status_search==null){
                        $users=DB::select("SELECT * FROM users,patents where users.id=patents.user_id and year=$year_search and users.id=".$request->name_search);
                        //dd('no records');
                        //dd($users);
                    }
                    else{
                        $users=DB::select("SELECT * FROM users,patents where  users.id=patents.user_id and status in $s2 and year=$year_search and users.id=".$request->name_search);
                        //dd('no records1');
                        //dd($users);
                    }




                    //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                    //dd('no records');
                    //dd($users);
                }
                else{


                    if($request->status_search==null){
                        $users=DB::select("SELECT * FROM users,patents where users.id=patents.user_id and domain in $s1 and year=$year_search and users.id=".$request->name_search);
                        //dd('no records');
                        //dd($users);
                    }
                    else{
                        $users=DB::select("SELECT * FROM users,patents where  users.id=patents.user_id and status in $s2 and domain in $s1 and year=$year_search and users.id=".$request->name_search);
                        //dd('no records1');
                        //dd($users);
                    }



                    //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                    //dd('no records1');
                    //dd($users);
                }
            }







                // if($request->category_search==null){
                //     $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'and status in $s2");
                //     //dd('no records2');\
                //     //dd($users);
                // }
                // else{
                //     $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and status in $s2");
                //      //dd('no records3');
                //      //dd($users);
                // }
            }
       // }
        // else{
        //     if($request->year_search=="null"){
        //         if($request->category_search==null){

        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records4');
        //             //dd($users);
        //         }
        //         else{
        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and category_of_journal in $s1 and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records5');
        //             //dd($users);
        //         }
        //     }
        //     else{
        //         if($request->category_search==null){
        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records6');
        //             //dd($users);
        //         }
        //         else{
        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records7');
        //             //dd($users);
        //         }
        //     }
        // }

        //dd($users);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        //$users=DB::select("SELECT * FROM users,education where users.id=education.user_id and education.user_id=".$request->name_search." and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.patentWiseSearch')->with('users',$users)->with('us',$us);
    }















    public function bookWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.bookWiseSearch')->with('us',$us);
    }

    public function bookSearch(Request $request)
    {
        //$profile=User::find($id);

       // dd($request->name_search);
        $year_search=$request->year_search;

        //$years=explode("-",$year_search);
        //$s1="()";
        if($request->category_search)
       {
           $s1=implode("','",$request->category_search);
           $s1='(\''.$s1.'\')';
        }
        if($request->status_search)
       {
           $s2=implode("','",$request->status_search);
           $s2='(\''.$s2.'\')';
        }
        if($request->type_search)
       {
           $s3=implode("','",$request->type_search);
           $s3='(\''.$s3.'\')';
        }
        // else{
        //     $s2=null;
        // }

        //dd($request->name_search);


        //dd($request->type_search);

        if($request->year_search=='null'){
        if($request->name_search=='all'){
            if($request->type_search==null){
                        if($request->category_search==null){


                                        if($request->status_search==null){
                                            $users=DB::select("SELECT * FROM users,books where users.id=books.user_id");
                                            //dd('no records');
                                            //dd($users);
                                        }
                                        else{
                                            $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2");
                                            //dd('no records1');
                                            //dd($users);
                                        }




                            //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                            //dd('no records');
                            //dd($users);
                        }
                        else{


                            if($request->status_search==null){
                                $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and category_of_book in $s1");
                                //dd('no records');
                                //dd($users);
                            }
                            else{
                                $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and category_of_book in $s1");
                                //dd('no records1');
                                //dd($users);
                            }



                            //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                            //dd('no records1');
                            //dd($users);
                        }
            }
            else{
                    if($request->category_search==null){


                        if($request->status_search==null){
                            $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and type in $s3");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and type in $s3");
                            //dd('no records1');
                            //dd($users);
                        }
    
    
    
    
                        //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                        //dd('no records');
                        //dd($users);
                    }
                    else{
    
    
                        if($request->status_search==null){
                            $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and category_of_book in $s1 and type in $s3");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and category_of_book in $s1 and type in $s3");
                            //dd('no records1');
                            //dd($users);
                        }
    
    
    
                        //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                        //dd('no records1');
                        //dd($users);
                    }
                }
        }
            else{
                //dd("in else");


                if($request->type_search==null){
                    if($request->category_search==null){


                                    if($request->status_search==null){
                                        $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and users.id=".$request->name_search);
                                        //dd('no records');
                                       //dd($users);
                                    }
                                    else{
                                        $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and users.id=".$request->name_search);
                                        //dd('no records1');
                                        //dd($users);
                                    }




                        //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                        //dd('no records');
                        //dd($users);
                    }
                    else{


                        if($request->status_search==null){
                            $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and category_of_book in $s1 and users.id=".$request->name_search);
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and category_of_book in $s1 and users.id=".$request->name_search);
                            //dd('no records1');
                            //dd($users);
                        }



                        //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                        //dd('no records1');
                        //dd($users);
                    }
        }
        else{
                if($request->category_search==null){


                    if($request->status_search==null){
                        $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and type in $s3 and users.id=".$request->name_search);
                        //dd('no records');
                        //dd($users);
                    }
                    else{
                        $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and type in $s3 and users.id=".$request->name_search);
                        //dd('no records1');
                        //dd($users);
                    }




                    //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                    //dd('no records');
                    //dd($users);
                }
                else{


                    if($request->status_search==null){
                        $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and category_of_book  in $s1 and type in $s3 and users.id=".$request->name_search);
                        //dd('no records');
                        //dd($users);
                    }
                    else{
                        $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and category_of_book  in $s1 and type in $s3 and users.id=".$request->name_search);
                        //dd('no records1');
                        //dd($users);
                    }



                    //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                    //dd('no records1');
                    //dd($users);
                }
            }







                // if($request->category_search==null){
                //     $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'and status in $s2");
                //     //dd('no records2');\
                //     //dd($users);
                // }
                // else{
                //     $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and status in $s2");
                //      //dd('no records3');
                //      //dd($users);
                // }
            }


        }
        else{
            if($request->name_search=='all'){
                if($request->type_search==null){
                            if($request->category_search==null){
    
    
                                            if($request->status_search==null){
                                                $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and year_of_publication=$year_search");
                                                //dd('no records');
                                                //dd($users);
                                            }
                                            else{
                                                $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and year_of_publication=$year_search");
                                                //dd('no records1');
                                                //dd($users);
                                            }
    
    
    
    
                                //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                                //dd('no records');
                                //dd($users);
                            }
                            else{
    
    
                                if($request->status_search==null){
                                    $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and category_of_book in $s1 and year_of_publication=$year_search");
                                    //dd('no records');
                                    //dd($users);
                                }
                                else{
                                    $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and category_of_book in $s1 and year_of_publication=$year_search");
                                    //dd('no records1');
                                    //dd($users);
                                }
    
    
    
                                //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                                //dd('no records1');
                                //dd($users);
                            }
                }
                else{
                        if($request->category_search==null){
    
    
                            if($request->status_search==null){
                                $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and type in $s3 and year_of_publication=$year_search");
                                //dd('no records');
                                //dd($users);
                            }
                            else{
                                $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and type in $s3 and year_of_publication=$year_search");
                                //dd('no records1');
                                //dd($users);
                            }
        
        
        
        
                            //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
        
        
                            if($request->status_search==null){
                                $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and category_of_book in $s1 and type in $s3 and year_of_publication=$year_search");
                                //dd('no records');
                                //dd($users);
                            }
                            else{
                                $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and category_of_book in $s1 and type in $s3 and year_of_publication=$year_search");
                                //dd('no records1');
                                //dd($users);
                            }
        
        
        
                            //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                            //dd('no records1');
                            //dd($users);
                        }
                    }
            }
                else{
    
    
                    if($request->type_search==null){
                        if($request->category_search==null){
    
    
                                        if($request->status_search==null){
                                            $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and users.id=".$request->name_search." and year_of_publication=$year_search");
                                            //dd('no records');
                                           //dd($users);
                                        }
                                        else{
                                            $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and users.id=".$request->name_search." and year_of_publication=$year_search");
                                            //dd('no records1');
                                            //dd($users);
                                        }
    
    
    
    
                            //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
    
    
                            if($request->status_search==null){
                                $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and category_of_book in $s1 and users.id=".$request->name_search." and year_of_publication=$year_search");
                                //dd('no records');
                                //dd($users);
                            }
                            else{
                                $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and category_of_book in $s1 and users.id=".$request->name_search." and year_of_publication=$year_search");
                                //dd('no records1');
                                //dd($users);
                            }
    
    
    
                            //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                            //dd('no records1');
                            //dd($users);
                        }
            }
            else{
                    if($request->category_search==null){
    
    
                        if($request->status_search==null){
                            $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and type in $s3 and users.id=".$request->name_search." and year_of_publication=$year_search");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and type in $s3 and users.id=".$request->name_search." and year_of_publication=$year_search");
                            //dd('no records1');
                            //dd($users);
                        }
    
    
    
    
                        //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                        //dd('no records');
                        //dd($users);
                    }
                    else{
    
    
                        if($request->status_search==null){
                            $users=DB::select("SELECT * FROM users,books where users.id=books.user_id and category_of_book in $s1 and type in $s3 and users.id=".$request->name_search." and year_of_publication=$year_search");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,books where  users.id=books.user_id and status in $s2 and category_of_book in $s1 and type in $s3 and users.id=".$request->name_search." and year_of_publication=$year_search");
                            //dd('no records1');
                            //dd($users);
                        }
    
    
    
                        //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                        //dd('no records1');
                        //dd($users);
                    }
                }
    
    
    
    
    
    
    
                    // if($request->category_search==null){
                    //     $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'and status in $s2");
                    //     //dd('no records2');\
                    //     //dd($users);
                    // }
                    // else{
                    //     $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and status in $s2");
                    //      //dd('no records3');
                    //      //dd($users);
                    // }
                }
    
        }







        
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.bookWiseSearch')->with('users',$users)->with('us',$us);
    }



































    public function paperWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.paperWiseSearch')->with('us',$us);
    }

    public function paperSearch(Request $request)
    {
        //$profile=User::find($id);

       // dd($request->name_search);
        $year_search=$request->year_search;

        $years=explode("-",$year_search);
        //$s1="()";
        if($request->category_search)
       {
           $s1=implode("','",$request->category_search);
           $s1='(\''.$s1.'\')';
        }
        if($request->status_search)
       {
           $s2=implode("','",$request->status_search);
           $s2='(\''.$s2.'\')';
        }
        // else{
        //     $s2=null;
        // }

        //dd($request->name_search);
        if($request->name_search=='all'){
            if($request->year_search=='null'){
                        if($request->category_search==null){


                                        if($request->status_search==null){
                                            $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id");
                                            //dd('no records');
                                            //dd($users);
                                        }
                                        else{
                                            $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and status in $s2");
                                            //dd('no records1');
                                            //dd($users);
                                        }




                            //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                            //dd('no records');
                            //dd($users);
                        }
                        else{


                            if($request->status_search==null){
                                $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and category_of_journal in $s1");
                                //dd('no records');
                                //dd($users);
                            }
                            else{
                                $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and status in $s2 and category_of_journal in $s1");
                                //dd('no records1');
                                //dd($users);
                            }



                            //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                            //dd('no records1');
                            //dd($users);
                        }
            }
            else{
                    if($request->category_search==null){


                        if($request->status_search==null){
                            $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and status in $s2 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                            //dd('no records1');
                            //dd($users);
                        }
    
    
    
    
                        //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                        //dd('no records');
                        //dd($users);
                    }
                    else{
    
    
                        if($request->status_search==null){
                            $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and status in $s2 and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                            //dd('no records1');
                            //dd($users);
                        }
    
    
    
                        //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                        //dd('no records1');
                        //dd($users);
                    }
                }
        }
            else{


                if($request->year_search=='null'){
                    if($request->category_search==null){


                                    if($request->status_search==null){
                                        $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and users.id=".$request->name_search);
                                        //dd('no records');
                                       //dd($users);
                                    }
                                    else{
                                        $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and status in $s2 and users.id=".$request->name_search);
                                        //dd('no records1');
                                        //dd($users);
                                    }




                        //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                        //dd('no records');
                        //dd($users);
                    }
                    else{


                        if($request->status_search==null){
                            $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and category_of_journal in $s1 and users.id=".$request->name_search);
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and status in $s2 and category_of_journal in $s1 and users.id=".$request->name_search);
                            //dd('no records1');
                            //dd($users);
                        }



                        //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                        //dd('no records1');
                        //dd($users);
                    }
        }
        else{
                if($request->category_search==null){


                    if($request->status_search==null){
                        $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                        //dd('no records');
                        //dd($users);
                    }
                    else{
                        $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and status in $s2 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                        //dd('no records1');
                        //dd($users);
                    }




                    //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                    //dd('no records');
                    //dd($users);
                }
                else{


                    if($request->status_search==null){
                        $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                        //dd('no records');
                        //dd($users);
                    }
                    else{
                        $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and status in $s2 and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                        //dd('no records1');
                        //dd($users);
                    }



                    //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                    //dd('no records1');
                    //dd($users);
                }
            }







                // if($request->category_search==null){
                //     $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'and status in $s2");
                //     //dd('no records2');\
                //     //dd($users);
                // }
                // else{
                //     $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and status in $s2");
                //      //dd('no records3');
                //      //dd($users);
                // }
            }
       // }
        // else{
        //     if($request->year_search=="null"){
        //         if($request->category_search==null){

        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records4');
        //             //dd($users);
        //         }
        //         else{
        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and category_of_journal in $s1 and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records5');
        //             //dd($users);
        //         }
        //     }
        //     else{
        //         if($request->category_search==null){
        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records6');
        //             //dd($users);
        //         }
        //         else{
        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records7');
        //             //dd($users);
        //         }
        //     }
        // }

        //dd($users);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        //$users=DB::select("SELECT * FROM users,education where users.id=education.user_id and education.user_id=".$request->name_search." and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.paperWiseSearch')->with('users',$users)->with('us',$us);
    }
















    public function projectWiseSearch(Request $request)
    {
        //$profile=User::find($id);
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.projectWiseSearch')->with('us',$us);
    }

    public function projectSearch(Request $request)
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
        if($request->funded_search)
       {
           $s2=implode("','",$request->funded_search);
           $s2='(\''.$s2.'\')';
        }
        // else{
        //     $s2=null;
        // }

        //dd($request->name_search);
        if($request->name_search=='all'){
            if($request->year_search=='null'){
                        if($request->domain_search==null){


                                        if($request->funded_search==null){
                                            $users=DB::select("SELECT * FROM users,projects where users.id=projects.user_id");
                                            //dd('no records');
                                            //dd($users);
                                        }
                                        else{
                                            $users=DB::select("SELECT * FROM users,projects where  users.id=projects.user_id and funded in $s2");
                                            //dd('no records1');
                                            //dd($users);
                                        }




                            //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                            //dd('no records');
                            //dd($users);
                        }
                        else{


                            if($request->funded_search==null){
                                $users=DB::select("SELECT * FROM users,projects where users.id=projects.user_id and field_of_study in $s1");
                                //dd('no records');
                                //dd($users);
                            }
                            else{
                                $users=DB::select("SELECT * FROM users,projects where  users.id=projects.user_id and funded in $s2 and field_of_study in $s1");
                                //dd('no records1');
                                //dd($users);
                            }



                            //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                            //dd('no records1');
                            //dd($users);
                        }
            }
            else{
                    if($request->domain_search==null){


                        if($request->funded_search==null){
                            $users=DB::select("SELECT * FROM users,projects where users.id=projects.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,projects where  users.id=projects.user_id and funded in $s2 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                            //dd('no records1');
                            //dd($users);
                        }
    
    
    
    
                        //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                        //dd('no records');
                        //dd($users);
                    }
                    else{
    
    
                        if($request->funded_search==null){
                            $users=DB::select("SELECT * FROM users,projects where users.id=projects.user_id and field_of_study in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,projects where  users.id=projects.user_id and funded in $s2 and field_of_study in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
                            //dd('no records1');
                            //dd($users);
                        }
    
    
    
                        //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                        //dd('no records1');
                        //dd($users);
                    }
                }
        }
            else{


                if($request->year_search=='null'){
                    if($request->domain_search==null){


                                    if($request->funded_search==null){
                                        $users=DB::select("SELECT * FROM users,projects where users.id=projects.user_id and users.id=".$request->name_search);
                                        //dd('no records');
                                       //dd($users);
                                    }
                                    else{
                                        $users=DB::select("SELECT * FROM users,projects where  users.id=projects.user_id and funded in $s2 and users.id=".$request->name_search);
                                        //dd('no records1');
                                        //dd($users);
                                    }




                        //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                        //dd('no records');
                        //dd($users);
                    }
                    else{


                        if($request->funded_search==null){
                            $users=DB::select("SELECT * FROM users,projects where users.id=projects.user_id and field_of_study in $s1 and users.id=".$request->name_search);
                            //dd('no records');
                            //dd($users);
                        }
                        else{
                            $users=DB::select("SELECT * FROM users,projects where  users.id=projects.user_id and funded in $s2 and field_of_study in $s1 and users.id=".$request->name_search);
                            //dd('no records1');
                            //dd($users);
                        }



                        //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                        //dd('no records1');
                        //dd($users);
                    }
        }
        else{
                if($request->domain_search==null){


                    if($request->funded_search==null){
                        $users=DB::select("SELECT * FROM users,projects where users.id=projects.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                        //dd('no records');
                        //dd($users);
                    }
                    else{
                        $users=DB::select("SELECT * FROM users,projects where  users.id=projects.user_id and funded in $s2 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                        //dd('no records1');
                        //dd($users);
                    }




                    //$users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and status in $s2");
                    //dd('no records');
                    //dd($users);
                }
                else{


                    if($request->funded_search==null){
                        $users=DB::select("SELECT * FROM users,projects where users.id=projects.user_id and field_of_study in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                        //dd('no records');
                        //dd($users);
                    }
                    else{
                        $users=DB::select("SELECT * FROM users,projects where  users.id=projects.user_id and funded in $s2 and field_of_study in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search);
                        //dd('no records1');
                        //dd($users);
                    }



                    //$users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and status in $s2");
                    //dd('no records1');
                    //dd($users);
                }
            }







                // if($request->category_search==null){
                //     $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'and status in $s2");
                //     //dd('no records2');\
                //     //dd($users);
                // }
                // else{
                //     $users=DB::select("SELECT * FROM users,papers where  users.id=papers.user_id and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and status in $s2");
                //      //dd('no records3');
                //      //dd($users);
                // }
            }
       // }
        // else{
        //     if($request->year_search=="null"){
        //         if($request->category_search==null){

        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records4');
        //             //dd($users);
        //         }
        //         else{
        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and category_of_journal in $s1 and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records5');
        //             //dd($users);
        //         }
        //     }
        //     else{
        //         if($request->category_search==null){
        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records6');
        //             //dd($users);
        //         }
        //         else{
        //             $users=DB::select("SELECT * FROM users,papers where users.id=papers.user_id and category_of_journal in $s1 and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31' and users.id=".$request->name_search." and status in $s2");
        //             //dd('no records7');
        //             //dd($users);
        //         }
        //     }
        // }

        //dd($users);
        //$users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        //$users=DB::select("SELECT * FROM users,education where users.id=education.user_id and education.user_id=".$request->name_search." and start_date BETWEEN '".$years[0]."-6-1' AND '".$years[1]."-5-31'");
        $us=DB::select("SELECT * FROM users");
        
        return view('admin.projectWiseSearch')->with('users',$users)->with('us',$us);
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

    public function download(Request $request){
        //dd($request->paper_pdf_path);
        $filepath=public_path('paper_pdf/'.$request->paper_pdf_path);
        return Response::download($filepath);
    }


    public function downloadPatent(Request $request){
        //dd($request->paper_pdf_path);
        $filepath=public_path('patent_pdf/'.$request->patent_pdf_path);
        return Response::download($filepath);
    }



    public function downloadCertification(Request $request){
        //dd($request->paper_pdf_path);
        $filepath=public_path('patent_pdf/'.$request->certification_pdf_path);
        return Response::download($filepath);
    }



    // public function downloadFile(Request $request){
    //     $dl=Paper::find($request->id);
    //     //return Storage::download($dl->paper_pdf_path,$dl->paper_pdf_path);
    //     return Storage::download(public_path('paper_pdf/shivjeet.pdf'));
    // }
}
