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
                                <a href="#" class="btn btn-success"> Book Issue </a>
                            </div>

                            <div class="col-md-3 justify-content-center">
                                <button class="btn btn-warning">Book Return </button>
                            </div>

                            <div class="col-md-3 justify-content-center">
                                <button class="btn btn-danger"> Check Status </button>
                            </div>

                            <div class="col-md-3 justify-content-center">
                                <button class="btn btn-info"> Book Search </button>
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