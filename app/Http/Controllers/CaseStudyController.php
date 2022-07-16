<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
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

    public function CaseStudy_view(Request $request)
    {
        return view('user.caseStudy');
    }

    public function addCaseStudy(Request $request)
    {
        $membership=new CaseStudy();

        $membership->title=$request->title;
        $membership->case_date=$request->case_date;
        $membership->description=$request->description;
        $membership->user_id=$request->id;

        $membership->save();

        return redirect('user/caseStudy')->with('success', "Success:CaseStudy Details Added");
    }

    public function getCaseStudyEdit(Request $request)
    {
       $id = $request->id;

       $CaseStudyDetails=CaseStudy::find($id);
        return view('user.editCaseStudy')->with('CaseStudyDetails',$CaseStudyDetails);
    }


    public function postCaseStudyEdit(request $request)
    {
       $id = $request->id;
        $membership=CaseStudy::find($id);

        $membership->title=$request->title;
        $membership->case_date=$request->case_date;
        $membership->description=$request->description;
        
        $membership->save();
        return redirect('user/caseStudy')->with(['success' => 'CaseStudy Updated successfully.']);
    }

    public function deleteCaseStudy(Request $request)
    {
        $id = $request->id;
       $res=CaseStudy::find($id)->delete();
       return redirect('user/caseStudy')->with(['success' => 'CaseStudy deleted successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function show(CaseStudy $caseStudy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseStudy $caseStudy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaseStudy $caseStudy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseStudy $caseStudy)
    {
        //
    }
}
