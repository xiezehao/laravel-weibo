<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Weibo App') - Laravel 新手入门教程</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')
<div class="container">
    <div class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
