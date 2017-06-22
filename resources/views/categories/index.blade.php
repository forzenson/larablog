@extends('layouts.default')
@section('content')
    <h1>Categories</h1>

    @if ($categories->isEmpty())
      <p>Sorry, no categories to show!</p>
    @else
      <ul>
      @foreach ($categories as $category)
        <li>
          <strong>{{ $category->name }}</strong>
          <span>latest post:</span>
          <article class="latest-post">
            <div class="entry-title"> {{ $category->latestPost->title }} </div>
            <div class="entry-digest"> {{ $category->latestPost->summary }} </div>
          </article>
        </li>
      @endforeach
      </ul>
    @endif

@stop
