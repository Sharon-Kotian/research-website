<?php

namespace App\Http\Controllers;

use App\Models\MDP;
use Illuminate\Http\Request;

class MDPController extends Controller
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
    public function store(Request $request)
    {
        //
    }


    public function mdp_view(Request $request)
    {
        return view('user.mdp');
    }

    public function addMdp(Request $request)
    {
        $membership=new MDP();

        $membership->mdp_title=$request->mdp_title;
        $membership->organization_name=$request->organization_name;
        $membership->start_date=$request->start_date;
        $membership->end_date=$request->end_date;
        $membership->description=$request->description;
        $membership->user_id=$request->id;

        $membership->save();

        return redirect('user/mdp')->with('success', "Success:MDP Details Added");
    }

    public function getMdpEdit(Request $request)
    {
       $id = $request->id;

       $MdpDetails=MDP::find($id);
        return view('user.editMdp')->with('MdpDetails',$MdpDetails);
    }


    public function postMdpEdit(request $request)
    {
       $id = $request->id;
        $membership=MDP::find($id);

        $membership->mdp_title=$request->mdp_title;
        $membership->organization_name=$request->organization_name;
        $membership->start_date=$request->start_date;
        $membership->end_date=$request->end_date;
        $membership->description=$request->description;
        
        $membership->save();
        return redirect('user/mdp')->with(['success' => 'MDP Updated successfully.']);
    }

    public function deleteMdp(Request $request)
    {
        $id = $request->id;
       $res=MDP::find($id)->delete();
       return redirect('user/mdp')->with(['success' => 'MDP deleted successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MDP  $mDP
     * @return \Illuminate\Http\Response
     */
    public function show(MDP $mDP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MDP  $mDP
     * @return \Illuminate\Http\Response
     */
    public function edit(MDP $mDP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MDP  $mDP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MDP $mDP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MDP  $mDP
     * @return \Illuminate\Http\Response
     */
    public function destroy(MDP $mDP)
    {
        //
    }
}
