@extends('cms.layouts.navigation')

@section('page-content')

    <div class="overlay"></div>

    <div class="raw100 raw-left raw-margin-top-50">
        <div class="col-sm-3 col-md-2 sidebar">
            <div class="raw100 raw-left raw-margin-bottom-90">
                @include('cms.dashboard.panel')
            </div>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>

@stop

@section('javascript')
    <script type="text/javascript" src="/js/dashboard.js"></script>
    
@stop
