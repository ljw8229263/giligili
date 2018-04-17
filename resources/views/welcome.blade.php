<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="css/app.css">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
        <div class="container-fluid" id="app">
            <div class="row">
                <div class="col-md">
                    {{--<youtube-dashboard></youtube-dashboard>--}}
                    <router-view></router-view>
                </div>
            </div>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
