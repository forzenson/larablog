@extends('cms.layouts.dashboard')

@section('content')

    <div class="row">
        <h1 class="page-header">Blog</h1>
    </div>

    <div class="row">
        <div class="">
            {!! Form::model($article, ['route' => ['articles.update', $article->id], 'method' => 'patch', 'class' => 'edit']) !!}
        
                 <div class="col-md-8">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
                   
                    {{ Form::label('summary', "Summary:", ['class' => 'form-spacing-top']) }}
                    {{ Form::text('summary', null, ['class' => 'form-control']) }}

                    {{ Form::label('content', "Content:", ['class' => 'form-spacing-top']) }}
                    {{ Form::textarea('content', null, ['class' => 'form-control']) }}

                    {{ Form::label('seo_title', 'Seo Title', ['class' => 'form-spacing-top']) }}
                    {{ Form::text('seo_title', null, array('class' => 'form-control')) }}

                    {{ Form::label('seo_key', 'Seo seo_key', ['class' => 'form-spacing-top']) }}
                    {{ Form::text('seo_key', null, array('class' => 'form-control')) }}

                    {{ Form::label('seo_desc', 'Seo seo_desc', ['class' => 'form-spacing-top']) }}
                    {{ Form::text('seo_desc', null, array('class' => 'form-control')) }}
                  
                    {{ Form::label('seen', 'Seen:') }}
                    {{ Form::checkbox('seen', 1, null,  array('class' => 'form-control')) }}
                    
                    {{ Form::label('active', 'Active:') }}
                    {{ Form::checkbox('active', 1, null,  array('class' => 'form-control')) }}
                   
                    <div class="form-group text-right">
                    <a href="{!! url('/articles') !!}" class="btn btn-default raw-left">Cancel</a>
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                 
                    </div>

            {!! Form::close() !!}
            
                
        </div>


        
            <div class="col-md-4">
            <div class="well">

                <dl class="dl-horizontal">
                    <label>Created At:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($article->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Last Updated:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($article->updated_at)) }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('articles.show', 'Show', array($article->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'DELETE']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
                <hr>


                <div class="row">
                    <div class="col-md-12">
                        {{ Html::linkRoute('articles.index', '<< See All Posts', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                    </div>
                </div>

            </div>
        </div>

        
        
    </div>

@endsection
