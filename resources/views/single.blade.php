@extends('layouts.layout')
@section('title')گم و پیدا
@endsection
@section('content')
<br><br><br><br>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="content col-md-8">
                <div class="row">
                <div class="col-md-6"><br>
                    <p>نام گمشده:</p>
                    <h6><mark>{{$formads->name}}</mark></h6> <hr>
                   <p>دسته بندی:</p>
                        @foreach($formads->categories as $item)
                          <h6><mark>{{$item->title}}</mark></h6>
                        @endforeach
                    <hr>
                    <p>مژدگانی:</p>

                   <p><mark>{{$formads->mojdegani}}</mark></p>
                    <br>
                    <hr>
                     <p>شماره تماس:</p>

                   <p><mark>{{$formads->phone}}</mark></p>
                    <br>
                    <hr>
                    <h5>توضیحات:</h5><br>
                    <p>{{$formads->content}}</p><br>
                    <hr>
                    <p> تاریخ ثبت آگهی : <mark>{!! jdate($formads->created_at) !!}</mark></p>
                    <p> تعداد بازدید : <mark>{{$formads->viwecount}}</mark></p>

                </div>
                <div class="img-ads col-md-6 "><br><br>
{{--                    <img  src="/{{$formads->img}}" alt="ads-1">--}}
                    <div class="img-zoom-container">
                        <!-- به جای اس ار سی ادرس عکس خودتون رو بدین -->
                        <div class="myimgsingle">
                        <img id="myimage" src="/{{$formads->img}}" alt="1"></div>
                        <div id="myresult" class="img-zoom-result"></div>
                    </div>

                </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>


@endsection








