@extends('cms.layouts.dashboard')

@section('content')

    <div class="row">
        <h1 class="page-header">Blog</h1>
    </div>

    <div class="row">
        {!! Form::open(['route' => 'articles.store', 'class' => 'add']) !!}

            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
            </div>
        
            <div class="form-group">
                {{ Form::label('summary', 'Summary') }}
                {{ Form::text('summary', Input::old('summary'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('content', 'Content') }}
                {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('seen', 'Seen') }}
                {{ Form::checkbox('seen', 1, null,  array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('active', 'Active') }}
                {{ Form::checkbox('active', 1, null,  array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('seo_title', 'Seo Title') }}
                {{ Form::text('seo_title', Input::old('seo_title'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('seo_key', 'Seo seo_key') }}
                {{ Form::text('seo_key', Input::old('seo_key'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('seo_desc', 'Seo seo_desc') }}
                {{ Form::text('seo_desc', Input::old('seo_desc'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group text-right">
                <a href="{!! url('/articles') !!}" class="btn btn-default raw-left">Cancel</a>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
    </div>
@endsection
