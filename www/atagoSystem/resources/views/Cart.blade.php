<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>cart</title>
        <link href="{{asset('/css/cart.css')}}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="root"></div>
        <script src="{{asset('/js/cart.js')}}"></script>
    </body>
</html>
