<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
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
    

    public function certification_view(Request $request)
    {
        return view('user.certification');
    }

    public function addCertification(Request $request)
    {
        $membership=new Certification();

        $membership->title=$request->title;
        $membership->organization_name=$request->organization_name;
        $membership->issue_date=$request->issue_date;
        $membership->expiry_date=$request->expiry_date;
        $membership->description=$request->description;
        if($file=$request->file('certification_pdf')){
            $name=$file->getClientOriginalName();
            if($file->move('certification_pdf',$name)){
                $membership->certification_pdf_path=$name;
            }
        }
        $membership->user_id=$request->id;

        $membership->save();

        return redirect('user/certification')->with('success', "Success:Certification Details Added");
    }

    public function getCertificationEdit(Request $request)
    {
       $id = $request->id;

       $CertificationDetails=Certification::find($id);
        return view('user.editCertification')->with('CertificationDetails',$CertificationDetails);
    }


    public function postCertificationEdit(request $request)
    {
       $id = $request->id;
        $membership=Certification::find($id);

        $membership->title=$request->title;
        $membership->organization_name=$request->organization_name;
        $membership->issue_date=$request->issue_date;
        $membership->expiry_date=$request->expiry_date;
        $membership->description=$request->description;
        if($file=$request->file('certification_pdf')){
            $name=$file->getClientOriginalName();
            if($file->move('certification_pdf',$name)){
                $membership->certification_pdf_path=$name;
            }
        }
        
        $membership->save();
        return redirect('user/certification')->with(['success' => 'Certification Updated successfully.']);
    }

    public function deleteCertification(Request $request)
    {
        $id = $request->id;
       $res=Certification::find($id)->delete();
       return redirect('user/certification')->with(['success' => 'Certification deleted successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show(Certification $certification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit(Certification $certification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certification $certification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certification $certification)
    {
        //
    }
}
