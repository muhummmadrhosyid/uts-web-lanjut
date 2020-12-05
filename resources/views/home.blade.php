@extends('master.main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-header">
            <strong class="card-title mb-3">Profile Card</strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" src="{{ asset('style/images/riad.jpeg') }}" width="300px" height="300px" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">Muhammad Riadhus Solihin</h5>
                <div class="location text-sm-center"><i class="fa fa-map-marker"></i> Kaltim, Samarinda</div>
            </div>
            <hr>
            <div class="card-text text-sm-center">
                <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-header">
            <strong class="card-title mb-3">Profile Card</strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" src="{{ asset('style/images/rhosyid3.png') }}" width="300px" height="300px" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">Muhammad Rhosyid Akhmad</h5>
                <div class="location text-sm-center"><i class="fa fa-map-marker"></i> Kaltim, Sebakung Taka</div>
            </div>
            <hr>
            <div class="card-text text-sm-center">
                <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
            </div>
        </div>
    </div>
</div>

@endsection