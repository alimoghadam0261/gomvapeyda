<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta name="title" content="Gomvapeyda gomshodeh گمشده گم وپیدا گمشده حیوانات انسان وسایل نقلیه">
<meta name="description" content="گم و پیدا برای پیدا شدن تمام چیزهایی هست که توسط ما و شما پیدا می شوند و به صاحبانشون می رسانیم #گم و پیدا">
<meta name="keywords" content="انسان گمشده,حیوانات گمشده,وسایل نقلیه گمشده,وسایل الکترونیکی گمشده,gomvapeyda,gomshodeh,gomkardeh,گم شده, گم و پیدا, گم کرده">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
 <meta name="google-site-verification" content="haGMUGMozBrGWNZiPHVqxiG6Wy-7xsISVEusEjW5q2o" />
    <meta name="p:domain_verify" content="23a9d9f75a5440441e51d958270a1473"/>

    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('img/logo/logo11.png')}}">

     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/skeletabs.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animation.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/wow.css')}}">
       <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
<link rel="stylesheet" href="{{asset('css/login.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/form-ads.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/aboute.css')}}">--}}



</head>




<body>
<div class="main" id="header">
    <div class="container">
        <div class="row">
            <div class="header-site col-md-4">
                <img src="{{asset('img/logo/logo1.png')}}" alt="logo" class="animated animate__bounceInRight">
            </div>
            @auth()
                <div class="header-button col-md-2 wow animate__fadeIn" data-wow-delay="1s">
                    <a href="{{route('admin')}}">
                        <button class="register-button-header">نمایش پنل کاربری</button>
                    </a>
                </div>
                <div class="header-button col-md-2 wow animate__fadeIn" data-wow-delay="1s">
                    <a href="{{route('logout')}}">
                        <button class="ads-button-header">خروج</button>
                    </a>
                </div>
            @else
                <div class="header-button col-md-2 wow animate__fadeIn" data-wow-delay="1s">
                    <a href="{{route('login')}}">
                        <button class="register-button-header">ورود/ ثبت نام</button>
                    </a>
                </div>
                <div class="header-button col-md-2 wow animate__fadeIn" data-wow-delay="1s">
                    <a href="{{route('formads.index')}}">
                        <button class="ads-button-header">ثبت آگهی</button>
                    </a>
                </div>
            @endauth




            <div class="soical-header animated animate__rotateInDownLeft">
                <div class="border">
                    <a href="https://www.instagram.com/gomvapeyda"> <i class="fa fa-instagram fa-2x" id="instagram"></i></a>
                </div>
                <div class="border">
                     <a href="https://www.facebook.com/gomvapeyda/"> <i class="fa fa-facebook fa-2x" id="facebook"></i></a>

                </div>
                <div class="border">
                    <a href="https://www.aparat.com/gomvapeyda"> <i class="fa fa-file-movie-o fa-2x" id="youtube"></i></a>
                </div>
                <div class="border">
                    <a href="https://t.me/gomvapeyda"> <i class="fa fa-telegram fa-2x" id="telegram"></i></a>
                </div>

{{--                <a href="{{route('formads.visitor')}}">test inja</a>--}}
            </div>
        </div>
        <hr>
    </div>
</div>
<!------------------------------------menu--------------------------------------------->
<div class="menubar wow animate__fadeIn" data-wow-duration="1.2s">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">


                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}"> <i class="fa fa-home"></i>  خانه  <span
                            class="sr-only">(current)</span></a>
                </li>



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-group"></i> دسته بندی
                    </a>
                    <?php
                    use App\Models\Category;$categoryies= Category::where([
                        ['parrent',0],['status','on']
                    ])->get();
                    ?>

                    <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                        @foreach($categoryies as $category)
                        <a class="dropdown-item" href="/category/{{ $category->title }}">{{$category->title}}</a>@endforeach</div>
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="#"> <i class="fa fa-paw"></i> حیوانات</a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="#"> <i class="fa fa-car"></i> وسایل نقلیه</a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="#"><i class="fa fa-address-book"></i> مدارک هویتی </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="#"><i class="fa fa-laptop"></i> وسایل الکترونیکی</a>--}}
{{--                    </div>--}}

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('rull.index')}}"><i class="fa fa-optin-monster"></i> قوانین</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('webblog.index')}}"><i class="fa fa-sitemap"></i> وبلاگ</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('aboute.index')}}"><i class="fa fa-address-card"></i> درباره ما </a>
                </li> <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}"><mark id="mark">ثبت نام</mark>   </a>
                </li>

            </ul>
        </div>
        <div class="search-container">
            <form method="get" >
                <select name="list_search" class="form-control" hidden>
                    <option value="name">بر اساس نام</option>
                    <option value="category">بر اساس دسته بندی</option>
                </select>
              <div class="searching">
                <button type="submit" class="btn btn-success" id="btn-search"><i class="fa fa-search "></i></button>
                <input type="text" placeholder="جستجو(نام گمشده)" name="txt_search" class="search-box"
                value="@if (!empty($_GET['txt_search']))
                    {{$_GET['txt_search']}}
                @endif">
                </div>


            </form>
        </div>
    </nav>
</div>
<!--------------------------------------main--------------------------------------------->
@yield('content')
<br>





<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3GM49694PY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3GM49694PY');
</script>




<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.js')}}"></script>
<script src="jquery.rcounterup.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/skeletabs.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('js/fontawesome.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>

    imageZoom("myimage", "myresult");
</script>



<script>
    $('#tag_list').select2();
</script>



<script>
    $(document).ready(function (){


        function  showWindows(){
            $('#popup').show();
        }
        showWindows();
        function hideWindows(){
            $('#popup').hide();
        }
        hideWindows();
        setTimeout(showWindows,1000);
        $('#btn-close').click(function (){
            hideWindows();
        })


    })
</script>



<!---start GOFTINO code--->
<script type="text/javascript">
  !function(){var i="5xzNyQ",a=window,d=document;function g(){var g=d.createElement("script"),s="https://www.goftino.com/widget/"+i,l=localStorage.getItem("goftino_"+i);g.async=!0,g.src=l?s+"?o="+l:s;d.getElementsByTagName("head")[0].appendChild(g);}"complete"===d.readyState?g():a.attachEvent?a.attachEvent("onload",g):a.addEventListener("load",g,!1);}();
</script>
<!---end GOFTINO code--->




  <!-- Hotjar Tracking Code for My site -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2482032,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<script
    src="https://cdn.payping.ir/statics/trust-v2.js"
    theme="dark"
    size="lg"
></script>

{{--recaptch google--}}
<script type="text/javascript">
    var onloadCallback = function() {
        alert("grecaptcha is ready!");
    };
</script>

{{--popup pardakht profile--}}
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

{{--script roll number index --}}

<script>
    $(function(){

        $('.count-num').rCounter({
            duration: 40

        });



</body>
</html>
