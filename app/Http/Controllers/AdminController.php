<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Student;

class AdminController extends Controller
{
    public function getIndex()
    {
        return view('admin.index');
    }

    public function getList(Request $request)
    {
        $this->validate($request, [ 
            'rollno' => 'required|min:7'
        ]);
        $roll = $request->input('rollno');
        $student = Student::where('rollno`','=',$roll)->with('books')->first();
        if (empty($student))
        {
            return redirect()->back()->with('msg','No student Found.  कुनै विद्यार्थी भेटिएन');
        }
        return view('book.status', ['students' => $student]);
    }

    public function postIssue(Request $request)
    {
        $this->validate($request, [ 
            'rollno' => 'required|min:7',
            'bookno' => 'required|numeric',
        ]);
        $roll = $request->input('rollno');
        $bookno = $request->input('bookno');

        $student = Student::where('roll_no','=',$roll)->first();
        if (empty($student))
        {
            return redirect()->back()->with('msg','No student Found with givel roll number')->withInput();
        }
        $book = Book::where('book_id','=',$bookno)->first();
        if (empty($book))
        {
            return redirect()->back()->with('msg','No Book With that number found on database. Try again.')->withInput();
        }
        $book->student_id = $student->id;
        $book->save();
        
        return redirect()->route('book.issue')->with('msg1', 'Book Issued')->withInput(); 
    }

    public function postReturn(Request $request)
    {
        $this->validate($request, [ 
            'booknumber' => 'required|numeric',
        ]);
        $bookno = $request->input('booknumber');
        $book = Book::where('book_id','=',$bookno)->first();
        if (empty($book))
        {
            return redirect()->back()->with('msg','No Book With that number has been issued. Try again.')->withInput();
        }
        $book->student_id = null;
        $book->save();
        return redirect()->route('book.return')->with('msg1', 'Book Returned');
    }
}