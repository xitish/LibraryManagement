@extends('layouts.master')

@section('content')
@include('partials.sidepanel')
<div class="row mt-3 ml-0 mr-0">
    <div class="col offset-2">
        <div class="container">
            <div class="flex mb-3">
                <div class="book-list-top">
                    <h4 class="text-muted">Books List </h4>
                    <span class="badge badge-success p-2" style="font-size:15px;">Total : {{$books->count()}}
                        Books</span>
                </div>

                <div class="book-list-top flex" style="flex-direction:column;">
                    <div style="flex:1">
                        <a href="{{route('book.create')}}" class="btn btn-primary btn-sm float-right">Add New Book</a>
                        <br>
                    </div>

                    <div style="flex:1; line-height:10px;">&nbsp;</div>

                    <div style=" flex:1">
                        <input type="search" name="book_name" id="book_name_input" placeholder="Search Books by Name">
                    </div>
                </div>
            </div>
            @if(Session::has('delete'))
                <div class="alert alert-danger alert-fade">{{Session::get('delete')}}</div>
            @endif
            <table class="table table-hover table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Publication</th>
                        <th scope="col">Copies</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $i => $book)
                    <tr>
                        <th scope="row">{{$i+1}}</th>
                        <td>
                            <a href="{{route('book.show', ['book' => $book->id])}}" target="_blank"
                                rel="noopener noreferrer">
                                <img src="{{asset($book->photo)}}" alt="{{$book->name}} photo" height="100">
                            </a>
                        </td>
                        <td>
                            <a href="{{route('book.show', ['book' => $book->id])}}" target="_blank"
                                rel="noopener noreferrer">{{$book->name}} </a><br><br>
                            <a href="{{route('book.edit', ['book' => $book->id])}}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{route('book.destroy', ['book' => $book->id])}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->publication}}</td>
                        <td>
                            <h6>
                                Total : <span class="text-success float-right">{{$total[$i]}}
                                    Copies</span><br><br>
                                Issued : <span class="text-info float-right">{{$total[$i] - $count[$i]}} Copies</span>
                                <hr>
                                Remaining : <span class="text-danger float-right">{{$count[$i]}} Copies</span>
                            </h6>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    @endsection
