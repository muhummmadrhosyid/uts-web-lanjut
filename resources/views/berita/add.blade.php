@extends('master.main')

@section('title', 'Berita')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Berita</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Berita</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-lg-3 col-md-6">
    <div class="social-box facebook">
        <i class="fa fa-facebook"></i>
        <ul>
            <li>
                <sctrong><span class="count">40</span> k</strong>
                    <span>friends</span>
            </li>
            <li>
                <sctrong><span class="count">450</span></strong>
                    <span>feeds</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box twitter">
        <i class="fa fa-twitter"></i>
        <ul>
            <li>
                <sctrong><span class="count">30</span> k</strong>
                    <span>friends</span>
            </li>
            <li>
                <sctrong><span class="count">450</span></strong>
                    <span>tweets</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box linkedin">
        <i class="fa fa-linkedin"></i>
        <ul>
            <li>
                <sctrong><span class="count">40</span> +</strong>
                    <span>contacts</span>
            </li>
            <li>
                <sctrong><span class="count">250</span></strong>
                    <span>feeds</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box google-plus">
        <i class="fa fa-google-plus"></i>
        <ul>
            <li>
                <sctrong><span class="count">894</span> k</strong>
                    <span>followers</span>
            </li>
            <li>
                <sctrong><span class="count">92</span></strong>
                    <span>circles</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->
@endsection