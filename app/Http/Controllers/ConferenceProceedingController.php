<?php

namespace App\Http\Controllers;

use App\Models\ConferenceProceeding;
use Illuminate\Http\Request;

class ConferenceProceedingController extends Controller
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

    public function conferenceProceeding_view(Request $request)
    {
        return view('user.conferenceProceeding');
    }

    public function addConferenceProceeding(Request $request)
    {
        $paper=new ConferenceProceeding();
        
        $paper->description=$request->description;
        $paper->conference_name=$request->conference_name;
        $paper->conference_date=$request->conference_date;
        $paper->conference_venue=$request->conference_venue;
        $paper->conference_organization_name=$request->conference_organization_name;
        //$paper->conference_title=$request->conference_title;
        //$paper->title_of_paper=$request->title_of_paper;
        
        
        $paper->user_id=$request->id;

        $paper->save();

        return redirect('user/conferenceProceeding')->with('success', "Success:Conference Proceeding Details Added");
    }

    public function getConferenceProceedingEdit(Request $request)
    {
       $id = $request->id;

       $ConferenceProceedingDetails=ConferenceProceeding::find($id);
        return view('user.editConferenceProceeding')->with('ConferenceProceedingDetails',$ConferenceProceedingDetails);
    }


    public function postConferenceProceedingEdit(request $request)
    {
       $id = $request->id;
        $paper=ConferenceProceeding::find($id);
        
        $paper->description=$request->description;
        $paper->conference_name=$request->conference_name;
        $paper->conference_date=$request->conference_date;
        $paper->conference_venue=$request->conference_venue;
        $paper->conference_organization_name=$request->conference_organization_name;
       

        //$paper->conference_title=$request->conference_title;
        //$paper->title_of_paper=$request->title_of_paper;
        $paper->save();
        return redirect('user/conferenceProceeding')->with(['success' => 'Conference Proceeding Updated successfully.']);

    }
    public function deleteConferenceProceeding(Request $request)
    {
        $id = $request->id;
       $res=ConferenceProceeding::find($id)->delete();
       return redirect('user/conferenceProceeding')->with(['success' => 'Conference Proceeding deleted successfully.']);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConferenceProceeding  $conferenceProceeding
     * @return \Illuminate\Http\Response
     */
    public function show(ConferenceProceeding $conferenceProceeding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConferenceProceeding  $conferenceProceeding
     * @return \Illuminate\Http\Response
     */
    public function edit(ConferenceProceeding $conferenceProceeding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConferenceProceeding  $conferenceProceeding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConferenceProceeding $conferenceProceeding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConferenceProceeding  $conferenceProceeding
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConferenceProceeding $conferenceProceeding)
    {
        //
    }
}
