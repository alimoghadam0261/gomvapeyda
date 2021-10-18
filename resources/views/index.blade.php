@extends('layouts.layout')
@section('title')گم و پیدا:مرجع رایگان گمشده در ایران
@endsection
@section('content')
<!--------------------------------------main--------------------------------------------->



<div class="page">
    <div class="container-fluid">
        <div class="row">
            <div class="side-bar col-md-2">

                <h5>دسته بندی ها</h5>
                <hr>
                <?php
                use App\Models\Category;$categoryies= Category::where([
                    ['parrent',0],['status','on']
                ])->get();
                ?>
                <ul class="ul-group">
                    @foreach($categoryies as $category)
                    <a href="/category/{{ $category->title }}">
                        <li>{{$category->title}}</li>
                    </a>

                    @endforeach
                </ul>
                <br>
                <hr>
                <div class="hemayat">
                    <a href="{{route('hemayat.index')}}">
                        <button class="hemayat-button wow animate__shakeX" data-wow-offset="80" data-wow-iteration="3"
                                data-wow-duration="5s">حمایت از ما
                        </button>
                    </a>
                </div>
                <br>
                <hr>
                <div class="tabligh-sidebar">
{{--                    <h4>محل تبلیغ شما</h4>
                    <img src="{{asset('img/tabligh/tabligh.gif')}}" loading="lazy"  width="192px" height="250px" alt="1">--}}
                </div>

                <div class="app-mobile">
                    <p>دانلود اپلیکشن موبایل</p>
                    <a href="#" onclick="myFunction()"><img src="{{asset('img/android.png')}}" loading="lazy"  alt="android" class="android"></a>
                    <a href="#" onclick="myFunction()"><img src="{{asset('img/Apple.png')}}" loading="lazy"  alt="apple" class="apple"></a>
                </div>
                <br>
                <hr>
                <div class="tabligh-sidebar">
                    <img src="{{asset('img/tabligh/2.gif')}}" loading="lazy"  width="192px" height="250px" alt="ads">
                </div>
                <br>
                <hr>
                <div class="inamd">
{{--                 /////////////////////////////////////////--}}
<!-- Statistics by www.1abzar.com --->
  <div class="roll-number" >
      <p >تعداد بازدید سایت</p><br>
      <h3 class="count-num">{{$geoipcount}}</h3>

  </div>
    <!-- Statistics by www.1abzar.com --->

                  <br><hr>
{{--                  <a referrerpolicy="origin" target="_blank" href="https://trustseal.enamad.ir/?id=220448&amp;Code=RM9H0UbTFInZ67v76XuY"><img referrerpolicy="origin" src="{{asset('img/inamad.png')}}" alt="counter" style="cursor:pointer" id="RM9H0UbTFInZ67v76XuY"></a><br><hr>--}}

                </div>
            </div>

            <!------------------------------------------col-md-10-content------------------------------>
            <div class="content col-md-10"><br>
{{--                <h4>آگهی های ویژه</h4>--}}
{{--                <div class="slide-show">--}}
{{--                    <div id="demo" class="carousel slide" data-ride="carousel">--}}

{{--                        <ul class="carousel-indicators">--}}
{{--                            <li data-target="#demo" data-slide-to="0" class="active"></li>--}}
{{--                            <li data-target="#demo" data-slide-to="1"></li>--}}
{{--                            <li data-target="#demo" data-slide-to="2"></li>--}}
{{--                            <li data-target="#demo" data-slide-to="3"></li>--}}
{{--                            <li data-target="#demo" data-slide-to="4"></li>--}}
{{--                        </ul>--}}
{{--                        <?php--}}
{{--                        use App\Models\Slider;$sliders= Slider::all();--}}
{{--                        ?>--}}
{{--                        <div class="carousel-inner">--}}
{{--                            @foreach($formads as $item)--}}
{{--                            @foreach($sliders as $slider1)--}}
{{--                            <div class="carousel-item {{$slider1['id']==1 ?'active':''}}">--}}
{{--                                <img src="/{{$slider1->img}}" alt="Los Angeles" width="100%" height="400px">--}}
{{--                                <div class="carousel-caption">--}}
{{--                                    <h3>{{$slider1->title}}</h3>--}}
{{--                                    <a href="/single/{{$item->id}}" style="color: black;text-decoration: none"><h5 id="editor">{{$slider1->content}}</h5></a>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @endforeach  @endforeach--}}
{{--                        </div>--}}
{{--                        <a class="carousel-control-prev" href="#demo" data-slide="prev">--}}
{{--                            <span class="carousel-control-prev-icon"></span>--}}
{{--                        </a>--}}
{{--                        <a class="carousel-control-next" href="#demo" data-slide="next">--}}
{{--                            <span class="carousel-control-next-icon"></span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    <hr>--}}
                    <h4>آگهی ها</h4><br>

                    <div class="ads-content-col10">

                        @foreach($formads as $item)

                        <div class="card-ads">
                            <img src="/{{$item->img}}" loading="lazy" alt="formads">
                            <div class="number-ads">
<p>  شماره آگهی : 
                               IMG-{{$item->id}}</p>
                            </div>
                            <a href="#">
                                <div class="dic-ads">
                                    <div class="title"><h4>{{$item->name}}</h4></div>

                                    <hr>
                                    <div class="cont">
                                      {{$item->content}}
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <a href="/single/{{$item->id}}">
                                    <button class="more-btn">توضیحات بیشتر</button>
                                    <br><br>


                                </a><br>
                            </a>
                        </div>
                        @endforeach


                       </div>
               {{--        <div class="row">       </div>  --}}
                <div class="col-md-4"><br><br> </div>
                <div class="pagination col-md-4"><p>{{$formads->links()}}</p></div><br><br>
                <div class="col-md-4"><br><br> </div>


                </div>




                <!---->


          </div>

        </div>

    </div>


<!----------------------------------------bttom btn------------------>
<div class="tap-up fixed-bottom d-none d-sm-block " style="text-align: center">
    <a href="#" onclick="to_up()"><img src="{{asset('img/arrow.gif')}}" loading="lazy" alt="arrow" id="top-arrow"></a>
</div>

<!--------------------------------------------popup-------------------->



<br>


@endsection

