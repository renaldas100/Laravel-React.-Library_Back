<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $books=Book::with('author')->get();

        $books=Book::all();
        foreach ($books as $book){
            if ($book->author != null){

            }
        }

        return $books;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book=new Book();
        $book->name=$request->name;
        $book->author_id=$request->author_id;
        $book->isbn=$request->isbn;
        $book->pages=$request->pages;
        $book->book_code=$request->book_code;
        $book->save();
        return true;

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return $book;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->name=$request->name;
        $book->author_id=$request->author_id;
        $book->isbn=$request->isbn;
        $book->pages=$request->pages;
        $book->book_code=$request->book_code;
        $book->save();
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return true;
    }
}
