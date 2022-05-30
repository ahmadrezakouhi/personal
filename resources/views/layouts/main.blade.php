<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/shabnam-font/5.0.1/font-face.css">
    <style>
.persian{
    font-family: 'shabnam'
}
    </style>
</head>
<body>


    @yield('content')



    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
</body>
</html>
