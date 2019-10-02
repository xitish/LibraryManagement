@extends('layouts.master')

@section('content')
@include('partials.sidepanel')
<div class="row mt-3 ml-0 mr-0">
    <div class="col offset-2">
        <div class="container">
            <h4 class="text-muted">Dashboard</h4><hr>
            <div class="row">
                <div class="col-4">
                    <a href="#">
                        <div class="card mycard">
                            <div class="card-body">
                                <div class="huge">72</div>
                                <h5>Total Books <small class="text-muted float-right">12 Different Books</small></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4">
                    <a href="#">
                        <div class="card mycard">
                            <div class="card-body">
                                <div class="huge">43</div>
                                <h5>Issued Books <small class="text-muted float-right">32 in Stock</small></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4">
                    <a href="#">
                        <div class="card mycard">
                            <div class="card-body">
                                <div class="huge">183</div>
                                <h5>Students Registered</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
