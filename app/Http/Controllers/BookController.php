<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
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

    public function book_view(Request $request)
    {
        return view('user.book');
    }

    public function addBook(Request $request)
    {
        $paper=new Book();

        $paper->book_title=$request->book_title;
        $paper->publication_name=$request->publication_name;
        $paper->category_of_book=$request->category_of_book;
        $paper->status=$request->status;
        $paper->type=$request->type;
        $paper->authors_co_authors=$request->authors_co_authors;
        $paper->volume=$request->volume;
        $paper->page_number_from=$request->page_number_from;
        $paper->page_number_to=$request->page_number_to;
        $paper->book_link=$request->book_link;
        $paper->year_of_publication=$request->year_of_publication;
        
        $paper->description=$request->description;
        $paper->conference_name=$request->conference_name;
        $paper->conference_date=$request->conference_date;
        $paper->conference_venue=$request->conference_venue;
        $paper->conference_organization_name=$request->conference_organization_name;
        //$paper->conference_title=$request->conference_title;
        //$paper->title_of_paper=$request->title_of_paper;
        
        
        $paper->user_id=$request->id;

        $paper->save();

        return redirect('user/book')->with('success', "Success:Book Details Added");
    }

    public function getBookEdit(Request $request)
    {
       $id = $request->id;

       $BookDetails=Book::find($id);
        return view('user.editBook')->with('BookDetails',$BookDetails);
    }


    public function postBookEdit(request $request)
    {
       $id = $request->id;
        $paper=Book::find($id);

        $paper->book_title=$request->book_title;
        $paper->publication_name=$request->publication_name;
        $paper->category_of_book=$request->category_of_book;
        $paper->status=$request->status;
        $paper->type=$request->type;
        $paper->authors_co_authors=$request->authors_co_authors;
        $paper->volume=$request->volume;
        $paper->page_number_from=$request->page_number_from;
        $paper->page_number_to=$request->page_number_to;
        $paper->book_link=$request->book_link;
        $paper->year_of_publication=$request->year_of_publication;
        
        $paper->description=$request->description;
        $paper->conference_name=$request->conference_name;
        $paper->conference_date=$request->conference_date;
        $paper->conference_venue=$request->conference_venue;
        $paper->conference_organization_name=$request->conference_organization_name;
       

        //$paper->conference_title=$request->conference_title;
        //$paper->title_of_paper=$request->title_of_paper;
        $paper->save();
        return redirect('user/book')->with(['success' => 'Book Updated successfully.']);

    }
    public function deleteBook(Request $request)
    {
        $id = $request->id;
       $res=Book::find($id)->delete();
       return redirect('user/book')->with(['success' => 'Book deleted successfully.']);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
