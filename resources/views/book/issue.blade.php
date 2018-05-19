@extends('layouts.master') 
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('msg'))
                <div class="alert alert-danger">
                    {{ Session::get('msg') }}
                </div>
                @endif
                @if(Session::has('msg1'))
                <div class="alert alert-success">
                    {{ Session::get('msg1') }}
                </div>
                @endif  
                @include('partials.errors')
                <div class="card">
                    <div class="card-header text">{{ __('Book Issue') }}</div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('book.issue') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="rollno" class="col-sm-4 col-form-label text-md-right">Roll No</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="rollno" placeholder="Eg: 072BCT24" name="rollno" value="{{ old('rollno') }}" required >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bookno" class="col-sm-4 col-form-label text-md-right">Book Number</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="bookno" placeholder="Eg: 122123" name="bookno" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Issue') }}
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
