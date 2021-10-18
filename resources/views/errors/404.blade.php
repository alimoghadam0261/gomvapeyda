<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>این صفحه وجود ندارد</title>
    <link rel="icon" type="image/png" href="{{asset('img/logo/logo11.png')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/404.css')}}">
</head>
<body>

<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <img src="{{asset('img/404.gif')}}" alt="404"></div>
            <div class="col-md-3" style="margin-top: 100px">
                <h2>این صفحه وجود ندارد.</h2>
                <hr>
                <p>صفحه ای با این آدرس موجود نیست، اگر دنبال صفحه خاصی در سایت هستید، میتوانید به صفحه اصلی سایت بازگشته و به دنبال صفحه مدنظر خود باشید.</p>
                <hr>
                <br>
                <a href="{{route('index')}}"><button class="btn btn-success">صفحه اصلی </button></a>
            </div>
        </div>
    </div>






</div>

<br><br>
<br><br>
<br><br>
<br><br>





<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/fontawesome.min.js')}}"></script>
</body>
</html>
