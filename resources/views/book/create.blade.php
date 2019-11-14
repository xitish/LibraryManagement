@extends('layouts.master')

@section('content')
@include('partials.sidepanel')
<div class="row mt-3 ml-0 mr-0">
    <div class="col offset-2">
        <div class="container">
            <div class="flex mb-3">
                <div class="book-list-top">
                    <h4 class="text-muted">Add New Book </h4>
                    <span class="badge badge-success p-2" style="font-size:15px;">Current Books : {{$count}}</span>
                </div>

                <div class="book-list-top flex" style="flex-direction:column;">
                    <div style="flex:1">
                        <a href="{{route('book.index')}}" class="btn btn-primary btn-sm float-right">Book List</a>
                        <br>
                    </div>
                </div>
            </div>

            @if(isset($book))
            <div class="card card-body mb-4">
                <h5 class="text-success">New Book Has Been Added</h5><hr>
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset($book->photo)}}" alt="Book Photo" class="w-100">
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
                                    @foreach($bookNumberList as $num)
                                        {{$num}} &nbsp; &nbsp; &nbsp;  
                                    @endforeach  
                                </b>
                                <br><br>
                                Total {{count($bookNumberList)}} copies.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="card">
                <div class="card-header text-center"><b class="text-danger">Enter Book Details</b></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('book.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="bookname" class="col-sm-2 col-form-label text-md-right">Book Name</label>

                            <div class="col-md-9">
                                <input id="bookname" type="text" class="form-control{{ $errors->has('bookname') ? ' is-invalid' : '' }}" name="bookname" value="{{ old('bookname') }}" required autofocus>

                                @if ($errors->has('bookname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bookname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="author" class="col-sm-2 col-form-label text-md-right">Author Name</label>

                            <div class="col-md-4">
                                <input id="author" type="text" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" name="author" value="{{ old('author') }}" required>

                                @if ($errors->has('author'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="publication" class="col-sm-2 col-form-label text-md-right">Publication</label>

                            <div class="col-md-3">
                                <input id="publication" type="text" class="form-control{{ $errors->has('publication') ? ' is-invalid' : '' }}" name="publication" value="{{ old('publication') }}" required>

                                @if ($errors->has('publication'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('publication') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label text-md-right">Book Description</label>

                            <div class="col-md-9">
                                <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required rows="5">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-sm-2 col-form-label text-md-right">Book Photo</label>

                            <div class="col-md-9">
                                <input id="photo" type="file" name="photo">
                                @if ($errors->has('photo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number" class="col-sm-2 col-form-label text-md-right">Number of Copies</label>

                            <div class="col-md-2">
                                <input id="number" type="number" name="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" required>
                                @if ($errors->has('number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Book') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
