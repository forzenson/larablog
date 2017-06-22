@extends('layouts.blog')


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')

    <h1>Articles</h1>
    @foreach ($articles as $article)

    <article>
      <h2>{{ $article->title }}</h2>
      <div class="body">{{ $article->summary }}</div>

       {!! Html::linkRoute('blogs.show', 'Read More', array($article->id), array('class' => 'btn btn-primary btn-block')) !!}
    </article>

    @endforeach
@stop
