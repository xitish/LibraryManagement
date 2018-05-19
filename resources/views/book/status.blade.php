@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form class="form-inline"  method="POST" action="{{ route('book.status') }}">
            @csrf
            <div class="form-group">
                <label for="rollno" class="col-sm-4 col-form-label text-md-right">Roll No</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="rollno" placeholder="072BCT24" name="rollno" required autofocus>
                </div>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Go</button>
            </div>
        </form>
        @if(Session::has('msg'))
            <div class="alert alert-danger" style="margin-top:10px;">
                {{ Session::get('msg') }}
            </div>
        @endif
        @include('partials.errors')

            <div class="card" style="margin-top:10px;">
                <div class="card-header text">{{ __('Book List') }}</div>

                <div class="card-body">
                    @if(!empty($students))
                        <div class="row" style="margin-bottom:10px">
                            <div class="col-md-6"> Student Name : {{ $students->name }}</div>
                            <div class="col-md-6"> Student roll Number : {{ $students->roll_no }}</div>
                        </div>
                        
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">S.N</th>
                                    <th scope="col">Book Number</th>
                                    <th scope="col">Book Name</th>
                                    <th scope="col">Author</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students->books as $book)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $book->book_id }}</td>
                                        <td>{{ $book->name }}</td>
                                        <td>{{ $book->author }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p> Enter Student Roll Number to view the list</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection