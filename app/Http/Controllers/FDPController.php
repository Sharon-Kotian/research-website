<?php

namespace App\Http\Controllers;

use App\Models\FDP;
use Illuminate\Http\Request;

class FDPController extends Controller
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


    public function fdp_view(Request $request)
    {
        return view('user.fdp');
    }

    public function addFdp(Request $request)
    {
        $membership=new FDP();

        $membership->fdp_title=$request->fdp_title;
        $membership->organization_name=$request->organization_name;
        $membership->start_date=$request->start_date;
        $membership->end_date=$request->end_date;
        $membership->description=$request->description;
        $membership->user_id=$request->id;

        $membership->save();

        return redirect('user/fdp')->with('success', "Success:FDP Details Added");
    }

    public function getFdpEdit(Request $request)
    {
       $id = $request->id;

       $FdpDetails=FDP::find($id);
        return view('user.editFdp')->with('FdpDetails',$FdpDetails);
    }


    public function postFdpEdit(request $request)
    {
       $id = $request->id;
        $membership=FDP::find($id);

        $membership->fdp_title=$request->fdp_title;
        $membership->organization_name=$request->organization_name;
        $membership->start_date=$request->start_date;
        $membership->end_date=$request->end_date;
        $membership->description=$request->description;
        
        $membership->save();
        return redirect('user/fdp')->with(['success' => 'FDP Updated successfully.']);
    }

    public function deleteFdp(Request $request)
    {
        $id = $request->id;
       $res=FDP::find($id)->delete();
       return redirect('user/fdp')->with(['success' => 'FDP deleted successfully.']);
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
     * @param  \App\Models\FDP  $fDP
     * @return \Illuminate\Http\Response
     */
    public function show(FDP $fDP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FDP  $fDP
     * @return \Illuminate\Http\Response
     */
    public function edit(FDP $fDP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FDP  $fDP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FDP $fDP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FDP  $fDP
     * @return \Illuminate\Http\Response
     */
    public function destroy(FDP $fDP)
    {
        //
    }
}
