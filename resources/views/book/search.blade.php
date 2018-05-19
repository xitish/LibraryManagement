@extends('layouts.master') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text"> Book Search</div>
                <div class="card-body">


                    <form class="form-inline" method="POST" action="{{ route('book.search') }}">
                        @csrf
                        <div class="form-group">
                            <label for="bookname" class="col-sm-4 col-form-label text-md-right">Book Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="bookname" placeholder="Book Name" name="bookname" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
