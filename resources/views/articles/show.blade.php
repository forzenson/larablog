@section('content')

<div class="row">
        <div class="col-md-8">
            <h1>{{ $article->title }}</h1>
            <p class="lead">{!! $article->content !!}</p>
            <hr>
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
                    <div class="col-md-12">
                        {{ Html::linkRoute('blogs.index', '<< See All Posts', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
