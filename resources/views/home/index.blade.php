@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text">
                    LIBRARY MANAGEMENT SYSTEM
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('login') }}" class="btn btn-success"> {{ __('Admin Login') }} </a>
                        </div>

                        <div class="col-md-6">
                            <a href="{{ route('student.index') }}" class="btn btn-primary"> Student Login </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection