<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;

class PaperController extends Controller
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

    public function paper_view(Request $request)
    {
        return view('user.paper');
    }

    public function addPaper(Request $request)
    {
        $paper=new Paper();

        //dd($request->start_date);

        $paper->paper_topic=$request->paper_topic;
        $paper->publication_name=$request->publication_name;
        $paper->category_of_journal=$request->category_of_journal;
        $paper->status=$request->status;
        $paper->authors_co_authors=$request->authors_co_authors;
        $paper->volume=$request->volume;
        $paper->page_number=$request->page_number;
        $paper->paper_link=$request->paper_link;
        $paper->citation=$request->citation;
        $paper->start_date=$request->start_date;
        //$paper->end_date=$request->end_date;
        $paper->description=$request->description;


        //$pdf=Storage::disk('public')->put('paper',$request->file('paper_pdf'));

        // $pdf = $request->file('paper_pdf');
        // $cont=$pdf->download()->getOriginalContent();
        // Storage::put('public/paper/a.pdf',$cont);


        //dd($request->file('paper_pdf'));

        // $uniqueFileName = uniqid() . $request->file('paper_pdf')->getClientOriginalName() . '.pdf';

        // $request->file('paper_pdf')->move(public_path('paper/'));

        // return redirect()->back()->with('success', 'File uploaded successfully.');

        
        
        
        //$request->file('paper_pdf')->store('public'.'1111');


        // $file=$request->file('paper_pdf');
        // //dd($file->getClientOriginalName());
        // //$extension=$file->getClientOriginalExtension();
        // $extension='pdf';
        // $filename='abc'.'.'.$extension;
        // //$file->storeAs('public','abc');

        // $file->store('paper/' .$filename);
        // $paper->paper_pdf_path=$filename;
        

        
      

        // $pdf = $request->file('paper_pdf');
        // $new_name = rand() . '.' . $pdf->getClientOriginalExtension();
        // $pdf->save(public_path('paper/' .$new_name));


        //dd($request->verified_seal_path);

        //$paper->paper_pdf_path = $new_name;
        //$paper->paper_pdf_path = $pdf;

        if($file=$request->file('paper_pdf')){
            $name=$file->getClientOriginalName();
            if($file->move('paper_pdf',$name)){
                $paper->paper_pdf_path=$name;
            }
        }

        $paper->user_id=$request->id;

        $paper->save();

        return redirect('user/paper')->with('success', "Success:Paper Details Added");
    }

    public function getPaperEdit(Request $request)
    {
       $id = $request->id;

       $PaperDetails=Paper::find($id);
        return view('user.editPaper')->with('PaperDetails',$PaperDetails);
    }


    public function postPaperEdit(request $request)
    {
       $id = $request->id;
        $paper=Paper::find($id);

        $paper->paper_topic=$request->paper_topic;
        $paper->publication_name=$request->publication_name;
        $paper->category_of_journal=$request->category_of_journal;
        $paper->status=$request->status;
        $paper->authors_co_authors=$request->authors_co_authors;
        $paper->volume=$request->volume;
        $paper->page_number=$request->page_number;
        $paper->paper_link=$request->paper_link;
        $paper->citation=$request->citation;
        $paper->start_date=$request->start_date;
        //$paper->end_date=$request->end_date;
        $paper->description=$request->description;
        if($file=$request->file('paper_pdf')){
            $name=$file->getClientOriginalName();
            if($file->move('paper_pdf',$name)){
                $paper->paper_pdf_path=$name;
            }
        }
        
        $paper->save();
        return redirect('user/paper')->with(['success' => 'Paper Updated successfully.']);
    }

    public function deletePaper(Request $request)
    {
        $id = $request->id;
       $res=Paper::find($id)->delete();
       return redirect('user/paper')->with(['success' => 'Paper deleted successfully.']);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function show(Paper $paper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function edit(Paper $paper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paper $paper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paper $paper)
    {
        //
    }
}
