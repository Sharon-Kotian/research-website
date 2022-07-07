<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
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

    public function education_view(Request $request)
    {
        return view('user.education');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addEducation(Request $request)
    {
        $education=new Education();

        $education->university_name=$request->university_name;
        $education->degree=$request->degree;
        $education->field_of_study=$request->field_of_study;
        $education->start_date=$request->start_date;
        $education->end_date=$request->end_date;
        $education->grade=$request->grade;
        $education->description=$request->description;
        $education->user_id=$request->id;

        $education->save();

        return redirect('user/education')->with('success', "Success:Education Details Added");
    }

    public function getEducationEdit(Request $request)
    {
       $id = $request->id;

       $EducationDetails=Education::find($id);
        return view('user.editEducation')->with('EducationDetails',$EducationDetails);
    }


    public function postEducationEdit(request $request)
    {
       $id = $request->id;
        $education=Education::find($id);

        $education->university_name=$request->university_name;
        $education->degree=$request->degree;
        $education->field_of_study=$request->field_of_study;
        $education->start_date=$request->start_date;
        $education->end_date=$request->end_date;
        $education->grade=$request->grade;
        $education->description=$request->description;
        
        
        $education->save();
        return redirect('user/education')->with(['success' => 'Education Updated successfully.']);
    }

    public function deleteEducation(Request $request)
    {
        $id = $request->id;
       $res=Education::find($id)->delete();
       return redirect('user/education')->with(['success' => 'Education deleted successfully.']);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
    }
}
