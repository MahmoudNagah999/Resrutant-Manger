<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title','UnKnown')</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <linl rel="stylesheet" href="{{asset('js/app.js')}}"> -->
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/general.css') }}">
        
    </head>

    <body>
        @include('inc.navbar')
        <div class="GeneralGeneral">
            <div class="container GeneralBody">
                @include('inc.messages')
                @yield('content')
            </div>    
            <div class="footer">
            @include('inc.footer')
            </div>        
        </div>
    </body>
</html>
