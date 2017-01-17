<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PM Book</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('partials.nav')
        <div id="app" class="ui stackable grid body-content">
            <div class="three wide column">
                @yield('left-nav')
            </div>

            <div class="ten wide column">
                @yield('content')
            </div>

            <div class="three wide column">
                @yield('right-nav')
            </div>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
<html>
