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


<form action="{{route('geoip.store')}}" method="post">
@csrf
    <input type="text" name="ip" value="{{$geoip->ip}}"><br>
    <input type="text" name="country" value="{{$geoip->country}}"><br>
    <input type="text" name="city"  value="{{$geoip->city}}"><br>
    <input type="text" name="timezone" value="{{$geoip->timezone}}"><br>
    <button type="submit">send</button>
</form>




</body>
</html>
