@extends('cms.layouts.master')

@section('navigation')

<div class="raw100 raw-left navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button class="navbar-toggle sidebar-menu-btn">
            <span class="fa fa-bars nav-open"></span>
            <span class="fa fa-close nav-close"></span>
        </button>
        <span class="navbar-brand">
            <span class="logo"></span> SuperBlog
        </span>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
            <span class="fa fa-gear"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="mainNavbar">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('/') }}" id="backbutton"><span class="fa fa-arrow-left"></span> Back To Site </a></li>
        </ul>
    </div>
</div>

@stop
