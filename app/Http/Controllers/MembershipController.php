<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
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


    public function membership_view(Request $request)
    {
        return view('user.membership');
    }

    public function addMembership(Request $request)
    {
        $membership=new Membership();

        $membership->organization_name=$request->organization_name;
        $membership->membership_id=$request->membership_id;
        $membership->start_date=$request->start_date;
        $membership->end_date=$request->end_date;
        $membership->description=$request->description;
        $membership->user_id=$request->id;

        $membership->save();

        return redirect('user/membership')->with('success', "Success:Membership Details Added");
    }

    public function getMembershipEdit(Request $request)
    {
       $id = $request->id;

       $MembershipDetails=Membership::find($id);
        return view('user.editMembership')->with('MembershipDetails',$MembershipDetails);
    }


    public function postMembershipEdit(request $request)
    {
       $id = $request->id;
        $membership=Membership::find($id);

        $membership->organization_name=$request->organization_name;
        $membership->membership_id=$request->membership_id;
        $membership->start_date=$request->start_date;
        $membership->end_date=$request->end_date;
        $membership->description=$request->description;
        
        $membership->save();
        return redirect('user/membership')->with(['success' => 'Membership Updated successfully.']);
    }

    public function deleteMembership(Request $request)
    {
        $id = $request->id;
       $res=Membership::find($id)->delete();
       return redirect('user/membership')->with(['success' => 'Membership deleted successfully.']);
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function edit(Membership $membership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membership $membership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membership $membership)
    {
        //
    }
}
