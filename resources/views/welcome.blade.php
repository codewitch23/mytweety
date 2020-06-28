<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
<div class="home-page">
    <h1 class="display-1">Tweety</h1>
    <div class="link">
        @auth
            <a href="#">home</a>
        @else
            <a href="/login">login </a>

            <a href="/register">register</a>
        @endauth
    </div>
</div>
</body>
</html>
