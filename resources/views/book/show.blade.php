@extends('layouts.master')

@section('content')
@include('partials.sidepanel')
<div class="row mt-3 ml-0 mr-0">
    <div class="col offset-2">
        <div class="container">
            <div class="flex mb-3">
                <div class="book-list-top">
                    <h4 class="text-muted">{{$book->name}} </h4>
                </div>

                <div class="book-list-top flex" style="flex-direction:column;">
                    <div style="flex:1">
                        <a href="{{route('book.index')}}" class="btn btn-primary btn-sm float-right">Book List</a>
                        <br>
                    </div>
                </div>
            </div>
            @if(isset($deletedBookList))
            <div class="alert alert-danger">
                <h5 class="text-danger">{{count($deletedBookList)}} copies of this book with following book numbers have been deleted.</h5><hr>
                @foreach($deletedBookList as $del)
                    <b>{{$del}} &nbsp; &nbsp;</b>
                @endforeach
            </div>
            @endif

            @if(isset($addedBookList))
            <div class="alert alert-success">
                <h5 class="text-success">{{count($addedBookList)}} copies of this book with following book numbers have been added.</h5><hr>
                @foreach($addedBookList as $add)
                    <b>{{$add}}  &nbsp; &nbsp;</b>
                @endforeach
            </div>
            @endif

            <div class="card card-body mb-4">
                <div class="row">
                    <div class="col-md-2 text-center">
                        <img src="{{asset($book->photo)}}" alt="Book Photo" class="w-100 mb-3">
                        <a href="{{route('book.edit', ['book' => $book->id ])}}" class="btn-info btn-sm">Edit this Book</a>
                    </div>

                    <div class="col-md-10">
                        <div class="row mt-2">
                            <div class="col-md-3 text-right">Book Name : </div>
                            <div class="col-md-8"><b>{{$book->name}}</b></div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-3  text-right">Book Author : </div>
                            <div class="col-md-8"><b>{{$book->author}}</b></div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-3 text-right">Publication : </div>
                            <div class="col-md-8"><b>{{$book->publication}}</b></div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-3 text-right">Book Description : </div>
                            <div class="col-md-8"><b>{{$book->description}}</b></div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-3 text-right">Book Numbers : </div>
                            <div class="col-md-8">
                                <b>
                                    @foreach($book->singleBooks as $sb)
                                        {{$sb->book_number}} &nbsp; &nbsp; &nbsp;  
                                    @endforeach  
                                </b>
                                <br><br>
                                Total {{$book->singleBooks->count()}} copies.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
