<!-- layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<style>
.navbar{
background-color: #1d68a7;
}

.alligator-turtle {
    background-image: url("/img/body.jpg");
    background-repeat: no-repeat;
    background-position: left top;
    margin: 0px;
    height: 953px;
    width: 50%!important;
    overflow: hidden;
    padding-right: 0px!important;
    padding-left: 0px!important;

}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 5.8 CRUD Example Tutorial</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="col-md-12 navbar">
        <nav><a href="{{ route('personagems.index')}}">Home</a> <a href="{{ route('personagems.index')}}">Home</a> </nav>
    </div>
<div class="container">
    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>