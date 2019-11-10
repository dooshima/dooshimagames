<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
 
        <link rel="stylesheet" href="{{ asset('css/app.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}"/>
    
        <script  src="{{ asset('js/app.js')}}"></script>
         
    </head>
    <body>
     @include('partials.header')
     <div class="container" >
     @yield('content')
     @include('partials.footer')
     </div>
    </body>
</html>