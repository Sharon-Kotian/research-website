<?php

namespace App\Http\Controllers;

use App\Models\Patent;
use Illuminate\Http\Request;

class PatentController extends Controller
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

    public function patent_view(Request $request)
    {
        return view('user.patent');
    }

    public function addpatent(Request $request)
    {
        $paper=new Patent();

        $paper->patent_title=$request->patent_title;
        $paper->status=$request->status;
        $paper->granting_agency=$request->granting_agency;
        $paper->domain=$request->domain;
        $paper->year=$request->year;
        $paper->patent_holders=$request->patent_holders;
        
        $paper->user_id=$request->id;

        $paper->save();

        return redirect('user/patent')->with('success', "Success:Patent Details Added");
    }

    public function getPatentEdit(Request $request)
    {
       $id = $request->id;

       $PatentDetails=Patent::find($id);
        return view('user.editPatent')->with('PatentDetails',$PatentDetails);
    }


    public function postPatentEdit(request $request)
    {
       $id = $request->id;
        $paper=Patent::find($id);

        $paper->patent_title=$request->patent_title;
        $paper->status=$request->status;
        $paper->granting_agency=$request->granting_agency;
        $paper->domain=$request->domain;
        $paper->year=$request->year;
        $paper->patent_holders=$request->patent_holders;
        
        
        $paper->save();
        return redirect('user/patent')->with(['success' => 'Patent Updated successfully.']);
    }

    public function deletePatent(Request $request)
    {
        $id = $request->id;
       $res=Patent::find($id)->delete();
       return redirect('user/patent')->with(['success' => 'Patent deleted successfully.']);
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
     * @param  \App\Models\Patent  $patent
     * @return \Illuminate\Http\Response
     */
    public function show(Patent $patent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patent  $patent
     * @return \Illuminate\Http\Response
     */
    public function edit(Patent $patent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patent  $patent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patent $patent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patent  $patent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patent $patent)
    {
        //
    }
}
