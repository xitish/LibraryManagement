@extends('layouts.master')

@section('content')
@include('partials.sidepanel')
<div class="row mt-3 ml-0 mr-0">
    <div class="col offset-2">
        <div class="container">
            <div class="flex mb-3">
                <div class="book-list-top">
                    <h4 class="text-muted">Edit Book </h4>
                </div>

                <div class="book-list-top flex" style="flex-direction:column;">
                    <div style="flex:1">
                        <a href="{{route('book.index')}}" class="btn btn-primary btn-sm float-right">Book List</a>
                        <br>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header text-center"><b class="text-danger">Edit Book Details</b></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('book.update', ['book' => $book->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="bookname" class="col-sm-2 col-form-label text-md-right">Book Name</label>

                            <div class="col-md-9">
                                <input id="bookname" type="text" class="form-control{{ $errors->has('bookname') ? ' is-invalid' : '' }}" name="bookname" value="{{ old('bookname') ? old('bookname') : $book->name }}" required autofocus>

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
                                <input id="author" type="text" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" name="author" value="{{ old('author') ? old('author') : $book->author }}" required>

                                @if ($errors->has('author'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="publication" class="col-sm-2 col-form-label text-md-right">Publication</label>

                            <div class="col-md-3">
                                <input id="publication" type="text" class="form-control{{ $errors->has('publication') ? ' is-invalid' : '' }}" name="publication" value="{{ old('publication') ? old('publication') : $book->publication }}" required>

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
                                <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required rows="5">{{ old('description') ? old('description') : $book->description  }}</textarea>
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
                                <img src="{{asset($book->photo)}}" alt="Book Photo" width="200">
                                <small>&nbsp; Choose new photo if you want to change the photo, otherwise old photo will remain.</small>
                                <input id="photo" type="file" name="photo" class="mt-3">
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
                                <input id="number" type="number" name="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" value="{{ old('number') ? old('number') : $count }}" required>
                                @if ($errors->has('number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-9 offset-md-2">
                                <small class="text-muted">If you decrease this number, some copies of this book will be deleted. And if you increase it, new copies will be added.</small>
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
