<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "Articles")</title>
    <link rel="stylesheet" href="{{asset("assets/bootstrap/dist/css/bootstrap.min.css")}}">
    @yield("css")
</head>
<body>
@include("layouts.front.navbar")

@yield("content")

@yield("layouts.front.footer")




<script src="{{asset("assets/bootstrap/dist/js/bootstrap.min.css")}}"></script>
<script src="{{asset("assets/bootstrap/dist/js/bootstrap.bundle.min.css")}}"></script>
<script src="{{asset("assets/bootstrap/dist/js/bootstrap.bundle.min.css")}}"></script>
@yield("js")

</body>
</html>
