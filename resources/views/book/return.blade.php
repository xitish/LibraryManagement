@extends('layouts.master') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text"> Book Return</div>
                <div class="card-body">
                    <form class="form-inline" method="POST" action="{{ route('book.return') }}">
                        @csrf
                        <div class="form-group">
                            <label for="booknumber" class="col-sm-5 col-form-label text-md-right">Book Number</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="booknumber" placeholder="Book Number" name="booknumber"  value="{{old('booknumber')}}" required autofocus>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Return</button>
                        </div>
                    </form>
                    @if(Session::has('msg'))
                    <div class="alert alert-danger" style="margin-top:10px;">
                        {{ Session::get('msg') }}
                    </div>
                    @endif @if(Session::has('msg1'))
                    <div class="alert alert-success" style="margin-top:10px;">
                        {{ Session::get('msg1') }}
                    </div>
                    @endif @if(!empty($book))
                    <div class="row" style="margin-top:10px;">
                        <div class="col-md-3 text-md-right">
                            <p>Book Name </p>
                        </div>
                        <div class="col-md-4">
                            <p>{{ $book->name }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-md-right">
                            <p>Book Author </p>
                        </div>
                        <div class="col-md-4">
                            <p>{{ $book->author }}</p>
                        </div>

                    </div>
                </div>


                @endif 
                @include('partials.errors')
            </div>
        </div>
    </div>
</div>
</div>
@endsection
