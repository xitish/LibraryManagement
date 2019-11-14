<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\SingleBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with('singleBooks')->get();
        $total = array();
        $count = array();
        foreach($books as $i => $book)
        {
            $total[$i] = 0;
            $count[$i] = 0;
            foreach ($book->singleBooks as $single)
            {
                $total[$i]++;
                if($single->sutdent_id == null){ $count[$i]++; }
            }
        }
        return view('book.index', compact('books', 'total', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count = Book::count();
        return  view('book.create', compact('count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 
            'bookname' => 'required|min:5',
            'author' => 'required',
            'publication' => 'required',
            'description' => 'sometimes|min:10',
            'photo' => 'sometimes|mimes:jpeg,jpg,png|max:1024',
            'number' => 'required|numeric'
        ]);

        // Create a Book
        $book = Book::create([
            'name' => $request->input('bookname'),
            'author' => $request->input('author'),
            'publication' => $request->input('publication'),
            'description' => $request->input('description'),
            'photo' => $request->hasFile('photo') ? 'storage/' . $request->file('photo')->store('images/bookphotos') : 'images/dummy.jpg',
        ]);

        // Find the last book_number of a SingleBook
        $lastBook = SingleBook::orderBy('book_number', 'desc')->first()->book_number;
        $bookNumber = $lastBook ;

        // Array to keep the list of book numbers of added copies of a Book
        $bookNumberList = array();

        // Create the required number of copies of the Book specified by the 'number' input field.
        for($i = 0; $i < $request->input('number'); $i++)
        {
            $bookNumber++;
            $singleBook = SingleBook::create([
                'book_number' => $bookNumber,
                'student_id' => null,
                'book_id' => $book->id,
            ]);

            // Add Book Number of current copy to array
            array_push($bookNumberList, $bookNumber);
        }

        $count = Book::count();
        return view('book.create', compact('book','bookNumberList', 'count'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
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
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Storage::delete(str_replace("storage/", "", $book->photo));
        $book->singleBooks()->delete();
        $book->delete();
        dd('deleted');
    }
}
