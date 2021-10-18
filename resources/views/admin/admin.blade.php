{{--@extends('admin.layout-admin.layout-admin')--}}

{{--@section('content')--}}

{{--    <div class="main">--}}

{{--        <div class="container-fluid">--}}

{{--            <div class="row">--}}

{{--                <div class="col-md-2"></div>--}}

{{--                <div class="col-md-10">--}}

{{--                    <div class="panel">--}}

{{--                        <div class="row">--}}

{{--                            <div class="a">--}}

{{--                                <p>تعداد کاربرها</p>--}}

{{--                                <h3>{{$countuser}}</h3>--}}

{{--                            </div>--}}



{{--                            <div class="c">--}}

{{--                                <p>تعداد اسلایدر ها</p>--}}

{{--                                <h3>{{$countslider}}</h3>--}}

{{--                            </div>--}}

{{--                            <div class="d">--}}

{{--                                <p>تعداد آگهی کاربران</p>--}}

{{--                                <h3>{{$countformads}}</h3>--}}

{{--                            </div>--}}

{{--                            <div class="e">--}}

{{--                                <p>تعداد پیام کابران</p>--}}

{{--                                <h3>{{$countabout}}</h3>--}}

{{--                            </div>--}}

{{--                            <div class="c">--}}

{{--                                <p>تعداد بازدید</p>--}}

{{--                                <h3>{{$visit}}</h3>--}}

{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}



{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}

{{--        <hr>--}}

{{--        <div class="main-date">--}}

{{--            <div class="container-fluid"style="">--}}

{{--                <div class="row">--}}

{{--                    <div class="col-md-4">ali</div>--}}

{{--                    <div class="col-md-4">moghadam</div>--}}

{{--                    <div class="col-md-4">--}}



{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

{{--@endsection--}}


{{--------------------------------------------------------------------------------------------------------}}
{{--------------------------------------------------------------------------------------------------------}}
{{--------------------------------------------------------------------------------------------------------}}
{{--------------------------------------------------------------------------------------------------------}}
{{--------------------------------------------------------------------------------------------------------}}


    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل مدیریت </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{asset("plugins/font-awesome/css/font-awesome.min.css")}}>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href={{asset("dist/css/adminlte.min.css")}}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{asset("plugins/iCheck/flat/blue.css")}}>
    <!-- Morris chart -->
    <link rel="stylesheet" href={{asset("plugins/morris/morris.css")}}>
    <!-- jvectormap -->
    <link rel="stylesheet" href={{asset("plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}>
    <!-- Date Picker -->
    <link rel="stylesheet" href={{asset("plugins/datepicker/datepicker3.css")}}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{asset("plugins/daterangepicker/daterangepicker-bs3.css")}}>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href={{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- bootstrap rtl -->
    <link rel="stylesheet" href={{asset("dist/css/bootstrap-rtl.min.css")}}>
    <!-- template rtl version -->
    <link rel="stylesheet" href={{asset("dist/css/custom-style.css")}}>
    <link rel="stylesheet" href="{{asset("./assets/css/style.css")}}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('index')}}">

                    <button class="btn btn-outline-primary" id="btn-show">نمایش سایت</button>

                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block" style="padding: 10px">
                <a href="{{route('logout')}}">

                    <button class="btn btn-danger">خروج</button>



                </a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        {{--        <ul class="navbar-nav mr-auto">--}}
        {{--            <!-- Messages Dropdown Menu -->--}}
        {{--            <li class="nav-item dropdown">--}}
        {{--                <a class="nav-link" data-toggle="dropdown" href="#">--}}
        {{--                    <i class="fa fa-comments-o"></i>--}}
        {{--                    <span class="badge badge-danger navbar-badge">3</span>--}}
        {{--                </a>--}}
        {{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">--}}
        {{--                    <a href="#" class="dropdown-item">--}}
        {{--                        <!-- Message Start -->--}}
        {{--                        <div class="media">--}}
        {{--                            <img src="{{asset('img/logo/logo1.png')}}" alt="User Avatar" class="img-size-50 ml-3 img-circle">--}}
        {{--                            <div class="media-body">--}}
        {{--                                <h3 class="dropdown-item-title">--}}
        {{--                                    <h4>well come {{auth()->user()->name}}</h4>--}}
        {{--                                    <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>--}}
        {{--                                </h3>--}}
        {{--                                <p class="text-sm">با من تماس بگیر لطفا...</p>--}}
        {{--                                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <!-- Message End -->--}}
        {{--                    </a>--}}
        {{--                    <div class="dropdown-divider"></div>--}}
        {{--                    <a href="#" class="dropdown-item">--}}
        {{--                        <!-- Message Start -->--}}
        {{--                        <div class="media">--}}
        {{--                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">--}}
        {{--                            <div class="media-body">--}}
        {{--                                <h3 class="dropdown-item-title">--}}
        {{--                                    پیمان احمدی--}}
        {{--                                    <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>--}}
        {{--                                </h3>--}}
        {{--                                <p class="text-sm">من پیامتو دریافت کردم</p>--}}
        {{--                                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <!-- Message End -->--}}
        {{--                    </a>--}}
        {{--                    <div class="dropdown-divider"></div>--}}
        {{--                    <a href="#" class="dropdown-item">--}}
        {{--                        <!-- Message Start -->--}}
        {{--                        <div class="media">--}}
        {{--                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">--}}
        {{--                            <div class="media-body">--}}
        {{--                                <h3 class="dropdown-item-title">--}}
        {{--                                    سارا وکیلی--}}
        {{--                                    <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>--}}
        {{--                                </h3>--}}
        {{--                                <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>--}}
        {{--                                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>4 ساعت قبل</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <!-- Message End -->--}}
        {{--                    </a>--}}
        {{--                    <div class="dropdown-divider"></div>--}}
        {{--                    <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>--}}
        {{--                </div>--}}
        {{--            </li>--}}
        {{--            <!-- Notifications Dropdown Menu -->--}}
        {{--            <li class="nav-item dropdown">--}}
        {{--                <a class="nav-link" data-toggle="dropdown" href="#">--}}
        {{--                    <i class="fa fa-bell-o"></i>--}}
        {{--                    <span class="badge badge-warning navbar-badge">15</span>--}}
        {{--                </a>--}}
        {{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">--}}
        {{--                    <span class="dropdown-item dropdown-header">15 نوتیفیکیشن</span>--}}
        {{--                    <div class="dropdown-divider"></div>--}}
        {{--                    <a href="#" class="dropdown-item">--}}
        {{--                        <i class="fa fa-envelope ml-2"></i> 4 پیام جدید--}}
        {{--                        <span class="float-left text-muted text-sm">3 دقیقه</span>--}}
        {{--                    </a>--}}
        {{--                    <div class="dropdown-divider"></div>--}}
        {{--                    <a href="#" class="dropdown-item">--}}
        {{--                        <i class="fa fa-users ml-2"></i> 8 درخواست دوستی--}}
        {{--                        <span class="float-left text-muted text-sm">12 ساعت</span>--}}
        {{--                    </a>--}}
        {{--                    <div class="dropdown-divider"></div>--}}
        {{--                    <a href="#" class="dropdown-item">--}}
        {{--                        <i class="fa fa-file ml-2"></i> 3 گزارش جدید--}}
        {{--                        <span class="float-left text-muted text-sm">2 روز</span>--}}
        {{--                    </a>--}}
        {{--                    <div class="dropdown-divider"></div>--}}
        {{--                    <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>--}}
        {{--                </div>--}}
        {{--            </li>--}}
        {{--            <li class="nav-item">--}}
        {{--                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i--}}
        {{--                        class="fa fa-th-large"></i></a>--}}
        {{--            </li>--}}
        {{--        </ul>--}}


{{--        clock-----------------------}}









{{--        clock-----------------------}}






    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
    {{--        <a href="index3.html" class="brand-link">--}}
    {{--            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
    {{--                 style="opacity: .8">--}}
    {{--            <span class="brand-text font-weight-light">پنل مدیریت</span>--}}
    {{--        </a>--}}

    <!-- Sidebar -->
        <div class="sidebar" style="direction: ltr">
            <div style="direction: rtl">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block"><h4>{{auth()->user()->name}} خوش آمدید </h4></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            {{--                            <a href="#" class="nav-link active">--}}
                            {{--                                <a href="{{route('admin')}}">  <i class="nav-icon fa fa-dashboard"> داشبورد </i></a>--}}

                            <a href="{{route('admin')}}"><p><i class="fa fa-dashboard"></i> داشبورد</p></a></li>
                        {{--                                    <i class="right fa fa-angle-left"></i>--}}

                        {{--                            </a>--}}
                        {{--                            <ul class="nav nav-treeview">--}}
                        {{--                                <li class="nav-item">--}}
                        {{--                                    <a href="./index.html" class="nav-link active">--}}
                        {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                        {{--                                        <p>داشبورد اول</p>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="nav-item">--}}
                        {{--                                    <a href="./index2.html" class="nav-link">--}}
                        {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                        {{--                                        <p>داشبورد دوم</p>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="nav-item">--}}
                        {{--                                    <a href="./index3.html" class="nav-link">--}}
                        {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                        {{--                                        <p>داشبورد سوم</p>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}
                        {{--                        <li class="nav-item">--}}
                        {{--                            <a href="pages/widgets.html" class="nav-link">--}}
                        {{--                                <i class="nav-icon fa fa-th"></i>--}}
                        {{--                                <p>--}}
                        {{--                                    ویجت‌ها--}}
                        {{--                                    <span class="right badge badge-danger">جدید</span>--}}
                        {{--                                </p>--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-pie-chart"></i>
                                <p>
                                    menu/منو
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('category.index')}}" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>همه منو</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('category.create')}}" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>افزودن منو</p>
                                    </a>
                                </li>


                                {{--                                ---------------020202020--}}
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fa fa-pie-chart"></i>
                                        <p>
                                            ads/آگهی ها
                                            <i class="right fa fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{route('formads.create')}}" class="nav-link">
                                                <i class="fa fa-circle-o nav-icon"></i>
                                                <p>همه آگهی ها</p>
                                            </a>
                                        </li>


                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fa fa-pie-chart"></i>
                                                <p>
                                                    message/پیام ها
                                                    <i class="right fa fa-angle-left"></i>
                                                </p>
                                            </a>

                                        <li class="nav-item">
                                            <a href="{{route('aboute.create')}}" class="nav-link">
                                                <i class="fa fa-circle-o nav-icon"></i>
                                                <p>همه پیام ها</p>
                                            </a>
                                        </li>


                                        {{--                                <li class="nav-item">--}}
                                        {{--                                    <a href="pages/charts/inline.html" class="nav-link">--}}
                                        {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                        {{--                                        <p>نمودار Inline</p>--}}
                                        {{--                                    </a>--}}
                                        {{--                                </li>--}}
                                    </ul>
                                </li>
                                {{--                        <li class="nav-item has-treeview">--}}
                                {{--                            <a href="#" class="nav-link">--}}
                                {{--                                <i class="nav-icon fa fa-tree"></i>--}}
                                {{--                                <p>--}}
                                {{--                                    اشیای گرافیکی--}}
                                {{--                                    <i class="fa fa-angle-left right"></i>--}}
                                {{--                                </p>--}}
                                {{--                            </a>--}}
                                {{--                            <ul class="nav nav-treeview">--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/UI/general.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>عمومی</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/UI/icons.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>آیکون‌ها</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/UI/buttons.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>دکمه‌ها</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/UI/sliders.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>اسلایدر‌ها</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                            </ul>--}}
                                {{--                        </li>--}}
                                {{--                        <li class="nav-item has-treeview">--}}
                                {{--                            <a href="#" class="nav-link">--}}
                                {{--                                <i class="nav-icon fa fa-edit"></i>--}}
                                {{--                                <p>--}}
                                {{--                                    فرم‌ها--}}
                                {{--                                    <i class="fa fa-angle-left right"></i>--}}
                                {{--                                </p>--}}
                                {{--                            </a>--}}
                                {{--                            <ul class="nav nav-treeview">--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/forms/general.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>اجزا عمومی</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/forms/advanced.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>پیشرفته</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/forms/editors.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>ویشرایشگر</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                            </ul>--}}
                                {{--                        </li>--}}
                                {{--                        <li class="nav-item has-treeview">--}}
                                {{--                            <a href="#" class="nav-link">--}}
                                {{--                                <i class="nav-icon fa fa-table"></i>--}}
                                {{--                                <p>--}}
                                {{--                                    جداول--}}
                                {{--                                    <i class="fa fa-angle-left right"></i>--}}
                                {{--                                </p>--}}
                                {{--                            </a>--}}
                                {{--                            <ul class="nav nav-treeview">--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/tables/simple.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>جداول ساده</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/tables/data.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>جداول داده</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                            </ul>--}}
                                {{--                        </li>--}}
                                {{--                        <li class="nav-header">مثال‌ها</li>--}}
                                {{--                        <li class="nav-item">--}}
                                {{--                            <a href="pages/calendar.html" class="nav-link">--}}
                                {{--                                <i class="nav-icon fa fa-calendar"></i>--}}
                                {{--                                <p>--}}
                                {{--                                    تقویم--}}
                                {{--                                    <span class="badge badge-info right">2</span>--}}
                                {{--                                </p>--}}
                                {{--                            </a>--}}
                                {{--                        </li>--}}
                                {{--                        <li class="nav-item has-treeview">--}}
                                {{--                            <a href="#" class="nav-link">--}}
                                {{--                                <i class="nav-icon fa fa-envelope-o"></i>--}}
                                {{--                                <p>--}}
                                {{--                                    ایمیل‌ باکس--}}
                                {{--                                    <i class="fa fa-angle-left right"></i>--}}
                                {{--                                </p>--}}
                                {{--                            </a>--}}
                                {{--                            <ul class="nav nav-treeview">--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/mailbox/mailbox.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>اینباکس</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/mailbox/compose.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>ایجاد</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/mailbox/read-mail.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>خواندن</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                            </ul>--}}
                                {{--                        </li>--}}
                                {{--                        <li class="nav-item has-treeview">--}}
                                {{--                            <a href="#" class="nav-link">--}}
                                {{--                                <i class="nav-icon fa fa-book"></i>--}}
                                {{--                                <p>--}}
                                {{--                                    صفحات--}}
                                {{--                                    <i class="fa fa-angle-left right"></i>--}}
                                {{--                                </p>--}}
                                {{--                            </a>--}}
                                {{--                            <ul class="nav nav-treeview">--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/examples/invoice.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>سفارشات</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/examples/profile.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>پروفایل</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/examples/login.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>صفحه ورود</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/examples/register.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>صفحه عضویت</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/examples/lockscreen.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>قفل صفحه</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                            </ul>--}}
                                {{--                        </li>--}}
                                {{--                        <li class="nav-item has-treeview">--}}
                                {{--                            <a href="#" class="nav-link">--}}
                                {{--                                <i class="nav-icon fa fa-plus-square-o"></i>--}}
                                {{--                                <p>--}}
                                {{--                                    بیشتر--}}
                                {{--                                    <i class="fa fa-angle-left right"></i>--}}
                                {{--                                </p>--}}
                                {{--                            </a>--}}
                                {{--                            <ul class="nav nav-treeview">--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/examples/404.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>ارور 404</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/examples/500.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>ارور 500</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="pages/examples/blank.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>صفحه خالی</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a href="starter.html" class="nav-link">--}}
                                {{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--                                        <p>صفحه شروع</p>--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                                {{--                            </ul>--}}
                                {{--                        </li>--}}
                                {{--                        <li class="nav-header">متفاوت</li>--}}
                                {{--                        <li class="nav-item">--}}
                                {{--                            <a href="#" class="nav-link">--}}
                                {{--                                <i class="nav-icon fa fa-file"></i>--}}
                                {{--                                <p>مستندات</p>--}}
                                {{--                            </a>--}}
                                {{--                        </li>--}}
                                {{--                        <li class="nav-header">برچسب‌ها</li>--}}
                                {{--                        <li class="nav-item">--}}
                                {{--                            <a href="#" class="nav-link">--}}
                                {{--                                <i class="nav-icon fa fa-circle-o text-danger"></i>--}}
                                {{--                                <p class="text">مهم</p>--}}
                                {{--                            </a>--}}
                                {{--                        </li>--}}
                                {{--                        <li class="nav-item">--}}
                                {{--                            <a href="#" class="nav-link">--}}
                                {{--                                <i class="nav-icon fa fa-circle-o text-warning"></i>--}}
                                {{--                                <p>هشدار</p>--}}
                                {{--                            </a>--}}
                                {{--                        </li>--}}
                                {{--                        <li class="nav-item">--}}
                                {{--                            <a href="#" class="nav-link">--}}
                                {{--                                <i class="nav-icon fa fa-circle-o text-info"></i>--}}
                                {{--                                <p>اطلاعات</p>--}}
                                {{--                            </a>--}}
                                {{--                   </li>--}}
                            </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">داشبورد</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        {{--                        <ol class="breadcrumb float-sm-left">--}}
                        {{--                            <li class="breadcrumb-item"><a href="#">خانه</a></li>--}}
                        {{--                            <li class="breadcrumb-item active">داشبورد ورژن 2</li>--}}
                        {{--                        </ol>--}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$countuser}}</h3>

                                <p>تعداد کاربر ها</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            {{--                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>--}}
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$countslider}}</h3>

                                <p>تعداد اسلایدر ها </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-sliders"></i>
                            </div>
                            {{--                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>--}}
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$countformads}}</h3>

                                <p>مجموع آگهی ها</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-address-card-o"></i>
                            </div>
                            {{--                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>--}}
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$countabout}}</h3>

                                <p>تعدادپیام کاربرها</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            {{--                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>--}}
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-7 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h3 class="card-title p-3">
                                    <i class="fa fa-pie-chart mr-1"></i>
                                    فروش
                                </h3>
                                <ul class="nav nav-pills mr-auto p-2">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">نمودار</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">چارت</a>
                                    </li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content p-0">
                                    <!-- Morris chart - Sales -->
                                    <div class="chart tab-pane active" id="revenue-chart"
                                         style="position: relative; height: 300px;"></div>
                                    <div class="chart tab-pane" id="sales-chart"
                                         style="position: relative; height: 300px;"></div>
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- DIRECT CHAT -->
                        <div class="card direct-chat direct-chat-primary">


                            <!-- /.card-header -->








                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->

                        <!-- TO DO List -->
{{-----------------------------------------------------------------}}

                        <div class="card-todo">
                            <div class="heading-todo-card">
                                <button class="btn-reload">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                                <div class="todo-date"></div>
                            </div>
                            <div class="todo-container">
                                <ul id="todolist-ul"></ul>
                            </div>
                            <div class="input-todo">
                                <div class="todo-group">
                                    <input type="text" class="form-control-todo" id="todo-input" placeholder="عنوان لیست خود را وارد کنید">
                                    <button type="button" class="btn-todo" data-flag="add" id="btn-add-todo">
                                        <i id="btn-add-i" class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>



{{----------------------------------------------}}





                    {{-----------------------------------------------------------------}}
                        <!-- /.card -->
                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">

                        <!-- Map card -->
                        <div class="card bg-primary-gradient">
                            <div class="card-header no-border">
                                <h3 class="card-title">
                                    <i class="fa fa-map-marker mr-1"></i>
                                    بازدید‌ها
                                </h3>
                                <!-- card tools -->
                                <div class="card-tools">
                                    <button type="button"
                                            class="btn btn-primary btn-sm daterange"
                                            data-toggle="tooltip"
                                            title="Date range">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                    <button type="button"
                                            class="btn btn-primary btn-sm"
                                            data-widget="collapse"
                                            data-toggle="tooltip"
                                            title="Collapse">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <div class="card-body">

{{--                                       table ip--}}
<div class="table-ip col-md-12" style=" height: 300px; overflow:scroll ">

                                        <table class="table table-bordered"  >
                                            <thead  class="table-striped">
                                            <tr>

                                                <th scope="col">شماره</th>
                                                <th scope="col">ip/آی پی</th>
                                                <th scope="col">country/کشور</th>
                                                <th scope="col">city/شهر</th>
                                                <th scope="col">timezone/منطقه زمانی</th>
                                                <th scope="col">date/تاریخ</th>
<h4>تعداد بازدید:  {{$geoipcount}}</h4>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($geoip as $item)

                                            <tr>

                                                @php $i=10 @endphp
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$item->ip}}</td>
                                                <td>{{$item->country}}</td>
                                                <td>{{$item->city}}</td>
                                                <td>{{$item->timezone}}</td>
                                                <td>{!!jdate($item->created_at) !!}</td>


                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

</div>


{{--                                       table ip--}}

                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>

                        <!-- /.card -->

                        <!-- solid sales graph -->
                        <div class="card bg-info-gradient">
                            <div class="card-header no-border">
                                <h3 class="card-title">
                                    <i class="fa fa-th mr-1"></i>
                                    نمودار فروش
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn bg-info btn-sm" data-widget="collapse">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn bg-info btn-sm" data-widget="remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart" id="line-chart" style="height: 250px;"></div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer bg-transparent">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <input type="text" class="knob" data-readonly="true" value="20" data-width="60"
                                               data-height="60"
                                               data-fgColor="#39CCCC">

                                        <div class="text-white">سفارش ایمیلی</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-4 text-center">
                                        <input type="text" class="knob" data-readonly="true" value="50" data-width="60"
                                               data-height="60"
                                               data-fgColor="#39CCCC">

                                        <div class="text-white">سفارش آنلاین</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-4 text-center">
                                        <input type="text" class="knob" data-readonly="true" value="30" data-width="60"
                                               data-height="60"
                                               data-fgColor="#39CCCC">

                                        <div class="text-white">سفارش فیزیکی</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->

                </div>




        </div>

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>CopyLeft &copy; 2021 <a href="#">محمد علی مقدم</a>.</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src={{asset("plugins/jquery/jquery.min.js")}}></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src={{asset("plugins/morris/morris.min.js")}}></script>
<!-- Sparkline -->
<script src={{asset("plugins/sparkline/jquery.sparkline.min.js")}}></script>
<!-- jvectormap -->
<script src={{asset("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}></script>
<script src={{asset("plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}></script>
<!-- jQuery Knob Chart -->
<script src={{asset("plugins/knob/jquery.knob.js")}}></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src={{asset("plugins/daterangepicker/daterangepicker.js")}}></script>
<!-- datepicker -->
<script src={{asset("plugins/datepicker/bootstrap-datepicker.js")}}></script>
<!-- Bootstrap WYSIHTML5 -->
<script src={{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}></script>
<!-- Slimscroll -->
<script src={{asset("plugins/slimScroll/jquery.slimscroll.min.js")}}></script>
<!-- FastClick -->
<script src={{asset("plugins/fastclick/fastclick.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("dist/js/adminlte.js")}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{asset("dist/js/pages/dashboard.js")}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{asset("dist/js/demo.js")}}></script>
{{--todolist--}}
<script type="text/javascript" src={{asset("./assets/js/index.js")}}></script>
</body>
</html>
