<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
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


    public function project_view(Request $request)
    {
        return view('user.project');
    }

    public function addProject(Request $request)
    {
        $project=new Projects();

        $project->project_name=$request->project_name;
        $project->field_of_study=$request->field_of_study;
        if($request->funded_by=="Other")
        {
            $project->funded_by=$request->funded_by_other;
        }
        else
        {
            $project->funded_by=$request->funded_by;
        }
        $project->funded=$request->funded;
        $project->sponsoring_agency=$request->sponsoring_agency;
        $project->funding_amount=$request->funding_amount;
        $project->publication_out_of_project=$request->publication_out_of_project;
        $project->start_date=$request->start_date;
        $project->end_date=$request->end_date;
        $project->description=$request->description;
        $project->user_id=$request->id;

        $project->save();

        return redirect('user/project')->with('success', "Success:Project Details Added");
    }

    public function getProjectEdit(Request $request)
    {
       $id = $request->id;

       $ProjectDetails=Projects::find($id);
        return view('user.editProject')->with('ProjectDetails',$ProjectDetails);
    }


    public function postProjectEdit(request $request)
    {
       $id = $request->id;
        $project=Projects::find($id);

        $project->project_name=$request->project_name;
        $project->field_of_study=$request->field_of_study;
        if($request->funded_by=="Other")
        {
            $project->funded_by=$request->funded_by_other;
        }
        else
        {
            $project->funded_by=$request->funded_by;
        }
        $project->funded=$request->funded;
        $project->sponsoring_agency=$request->sponsoring_agency;
        $project->funding_amount=$request->funding_amount;
        $project->publication_out_of_project=$request->publication_out_of_project;
        $project->start_date=$request->start_date;
        $project->end_date=$request->end_date;
        $project->description=$request->description;
        
        
        $project->save();
        return redirect('user/project')->with(['success' => 'Project Updated successfully.']);
    }

    public function deleteProject(Request $request)
    {
        $id = $request->id;
       $res=Projects::find($id)->delete();
       return redirect('user/project')->with(['success' => 'Project deleted successfully.']);
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $projects)
    {
        //
    }
}
