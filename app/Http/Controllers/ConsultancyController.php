<?php

namespace App\Http\Controllers;

use App\Models\Consultancy;
use Illuminate\Http\Request;

class ConsultancyController extends Controller
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

    public function consultancy_view(Request $request)
    {
        return view('user.consultancy');
    }

    public function addConsultancy(Request $request)
    {
        $consultancy=new Consultancy();

        $consultancy->organization_name=$request->organization_name;
        $consultancy->desc_of_task=$request->desc_of_task;
        $consultancy->concerned_person_name=$request->concerned_person_name;
        $consultancy->concerned_person_contact_number=$request->concerned_person_contact_number;
        $consultancy->assignment_name=$request->assignment_name;
        $consultancy->amount_received=$request->amount_received;
        $consultancy->start_date=$request->start_date;
        $consultancy->end_date=$request->end_date;
        $consultancy->user_id=$request->id;

        $consultancy->save();

        return redirect('user/consultancy')->with('success', "Success:Consultancy Details Added");
    }

    public function getConsultancyEdit(Request $request)
    {
       $id = $request->id;

       $ConsultancyDetails=Consultancy::find($id);
        return view('user.editConsultancy')->with('ConsultancyDetails',$ConsultancyDetails);
    }


    public function postConsultancyEdit(request $request)
    {
       $id = $request->id;
        $consultancy=Consultancy::find($id);

        $consultancy->organization_name=$request->organization_name;
        $consultancy->desc_of_task=$request->desc_of_task;
        $consultancy->concerned_person_name=$request->concerned_person_name;
        $consultancy->concerned_person_contact_number=$request->concerned_person_contact_number;
        $consultancy->assignment_name=$request->assignment_name;
        $consultancy->amount_received=$request->amount_received;
        $consultancy->start_date=$request->start_date;
        $consultancy->end_date=$request->end_date;
        
        
        $consultancy->save();
        return redirect('user/consultancy')->with(['success' => 'Consultancy Updated successfully.']);
    }

    public function deleteConsultancy(Request $request)
    {
        $id = $request->id;
       $res=Consultancy::find($id)->delete();
       return redirect('user/consultancy')->with(['success' => 'Consultancy deleted successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function show(Consultancy $consultancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultancy $consultancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultancy $consultancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultancy $consultancy)
    {
        //
    }
}
