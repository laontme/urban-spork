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
<form action="{{ route("login") }}" method="post">
    @method("post")
    @csrf

    <label>
        Email:
        <input type="email" name="email">
    </label>
    <br>

    <label>
        Password:
        <input type="password" name="password">
    </label>
    <br>

    <input type="submit" value="Login">
</form>
</body>
</html>
