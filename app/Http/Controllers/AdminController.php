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

    public function nameSearch(Request $request)
    {
        //$profile=User::find($id);
        $users=DB::select("SELECT * FROM users where firstName LIKE '%".$request->name_search."%' OR lastName LIKE '%".$request->name_search."%'");
        
        return view('admin.basicSearch')->with('users',$users);
    }

    public function yearSearch(Request $request)
    {
        //$profile=User::find($id);
        $users=DB::select("SELECT users.id,users.firstName,users.lastName,users.email,users.gender,users.employee_id,users.designation,users.date_of_joining,users.domain_of_expertise FROM users,education where users.id=education.user_id and end_date BETWEEN '".$request->year_search."-1-1' AND '".$request->year_search."-12-31'");
        
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
