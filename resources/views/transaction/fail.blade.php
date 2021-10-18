

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>خطا در تراکنش</title>
</head>
<body >
<div class="main-500">
    <div class="container">
        <div class="row">

            <div class="col-mad-4">
                <img src="{{asset('../img/warnig.png')}}" alt="warning">
            </div>


            <div class="col-md-8">
                <h3>خطا در ارتباط</h3><br>
                <h4>هم وطن عزیز ارتباط با درگاه پرداخت مشکل دارد عواملی مثل سرعت اینترنت ،استفاده از فیلتر شکن و...باعث به وجود آمدن این مشکل شده است</h4>
                <h4>لطفا مراحل را بعد از چند دقیقه دوباره انجام دهید</h4>
                <a href="{{route('index')}}"><button class="btn btn-primary">صفحه اول</button></a>
            </div>


        </div>
    </div>
</div>
</body>
</html>
