@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text">ADMINISTRATOR PANEL</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 justify-content-center">
                                <a href="{{ route('book.issue') }}" class="btn btn-success"> Book Issue </a>
                            </div>

                            <div class="col-md-3 justify-content-center">
                                <a href="{{ route('book.return') }}" class="btn btn-warning">Book Return </a>
                            </div>

                            <div class="col-md-3 justify-content-center">
                                <a href="{{ route('book.status') }}" class="btn btn-danger"> Check Status </a>
                            </div>

                            <div class="col-md-3 justify-content-center">
                                <a href="{{ route('book.search') }}" class="btn btn-info"> Book Search </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div>
                    <a class="btn btn-default" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection