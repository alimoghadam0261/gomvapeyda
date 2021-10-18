@extends('layouts.layout')
@section('title')گم و پیدا
@endsection
@section('content')

    <!------------------------------------------col-md-10-content------------------------------>

    <div class="content col-md-12"><br>
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
                @if ($item->status =='on')
                <div class="card-ads">
                    <img src="/{{$item->img}}"alt="1">
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
                        </a><br><br>
                    </a>
                </div>
                @endif
            @endforeach

        </div>

    </div>
    <div class="row">
        <div class="col-md-4"><br><br> </div>
        <div class="pagination col-md-4"><p>{{$formads->links()}}</p></div><br><br>
        <div class="col-md-4"><br><br> </div>
    </div>
@endsection

