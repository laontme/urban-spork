<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{ route("register.form") }}">Register</a>
<a href="{{ route("login.form") }}">Login</a>
<a href="{{ route("user-logout") }}">Logout</a>
<br>
@if(Auth::check())
    Вы вошли как <b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b>
@else
    Вы не вошли
@endif
</body>
</html>
