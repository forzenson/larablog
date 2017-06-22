<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

        <title>Admin Page</title>

        <link rel="icon" type="image/ico" href="/favicon.ico">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap Theme -->
        <link rel="stylesheet" type="text/css" href="/themes/bootstrap-flatly.css">

        <!-- App style -->
        <!--<link rel="stylesheet" type="text/css" href="/css/all.css">-->
        <link rel="stylesheet" type="text/css" href="/css/mycss.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('stylesheets')

        <script type="text/javascript">

            var _token = '{!! csrf_token() !!}';
            var _url = '{!! url("/") !!}';
            var _appTimeZone = '{!! config('app.timezone', 'UTC') !!}';

        </script>
    </head>
    <body>

        @include('cms.layouts.loading-overlay')


        @yield("navigation")

        <div class="container-fluid raw-margin-bottom-72">
            <div class="row">
                @yield("page-content")
            </div>
        </div>

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/all.js"></script>

        @yield("javascript")
    </body>
</html>
