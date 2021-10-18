@extends('layouts.layout')
@section('title')
@endsection
@section('content')
    <!------------------------------------menu--------------------------------------------->
    <div class="main">
        <br>
        <div id="popup">

            <button id="btn-close">خروج</button>
            <h1>اطلاعیه</h1>
            <p>به مناسبت افتتاح این مجموعه تمامی آگهی ها از تاریخ 1400/7/9 به مدت 2 ماه با طرح طلایی ثبت می گردد و بدون
                پرداخت هزینه از این طرح می توانید استفاده کنید و از مزایای آن بهرمند شوید.کافیست در قسمت انتخاب طرح ،
                طرح رایگان را انتخاب فرمایید </p>
            <hr>
            <p>لطفا ما را در شبکه های اجتماعی حمایت کنید </p><br>
            <a href="https://www.instagram.com/gomvapeyda"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="https://t.me/gomvapeyda"><i class="fa fa-telegram fa-2x"></i></a>
            <a href="https://www.aparat.com/gomvapeyda"><i class="fa fa-file-movie-o fa-2x"></i></a>
            <a href="https://www.facebook.com/gomvapeyda/"><i class="fa fa-facebook-square fa-2x"></i></a>

        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 slider">
                    <div class="welcome">
                        <img src="{{asset('img/logo/slider.png')}}" alt="a">
                        <h5>{{auth()->user()->name}} عزیز خوش آمدید</h5></div>
                    <p>ما را در شبکه های اجتماعی دنبال کنید </p><br>
                    <div class="soical">
                        <a href="https://www.instagram.com/gomvapeyda"><i class="fa fa-instagram fa-2x"></i></a>
                        <a href="https://t.me/gomvapeyda"><i class="fa fa-telegram fa-2x"></i></a>
                        <a href="https://www.aparat.com/gomvapeyda"><i class="fa fa-file-movie-o fa-2x"></i></a>
                        <a href="https://www.facebook.com/gomvapeyda/"> <i class="fa fa-facebook fa-2x"></i></a>

                    </div>
                    <hr>
                    <div class="hemayat">
                        <a href="{{route('hemayat.index')}}">
                            <button class="hemayat-button">حمایت از ما</button>
                        </a>
                    </div>
                    <hr>
                    <div class="ads">
                        <button class="ads-button"><a href="#form-reg-ads">ثبت آگهی</a></button>
                    </div>
                    <br>
                    <hr>
                    <div class="app-mobile">
                        <p>دانلود اپلیکشن موبایل</p>
                        <a href="#" onclick="myFunction()"><img src="{{asset('img/android.png')}}" alt="android-formads"
                                                                class="android-formads"></a>
                        <a href="#" onclick="myFunction()"><img src="{{asset('img/Apple.png')}}" alt="apple-formads"
                                                                class="apple-formads"></a>
                    </div>
                    <hr>
                    <div class="inamad">

                        <img src="{{asset('img/inamad.png')}}" alt="inamad">
                        <span id="PPTrust" style="margin-right: 40px"/>
                    </div>

                    <div class="tabligh-sidebar">
                        <img src="{{asset('img/tabligh/2.gif')}}" width="192px" height="250px" alt="1">
                    </div>
                </div>
                <div class="col-md-10 content">
                    @if (session('success'))
                        <div class="alert alert-success"><i class="fa fa-info-circle fa-2x"></i> {{session('success')}}
                        </div>

                    @endif
                        @error('img')
                        <div class="alert alert-danger wow animate__shakeX">{{$message}}</div>
                        @enderror
                    <div class="weghit">


                        <div class="col-md-12 test">
                            <div class="row">
                                <div class="a">
                                    <p>تعداد آگهی شما:</p>


                                    <h2> {{auth()->user()->formads()->count()}}</h2>



                                </div>
                                <div class="b">
                                    <p>تاریخ عضویت:</p>
                                    {!! jdate(auth()->user()->created_at) !!}
                                </div>


                                <div class="c">
                                    <p>تراکنش ها</p><br>

                                    <table class="table table-bordered">
                                        <thead class="table-bordered">
                                        <tr>
                                            <th>مبلغ</th>
                                            <th>شماره پیگیری</th>
                                            <th>تاریخ پرداخت</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-striped">
                                        <tr>

                                            @foreach(Auth::user()->formads as $formad)
                                                @foreach($formad->transactions as $val)

                                                    <td> {{$val->refid}}</td>
                                                    <td>{{$val->amount}}</td>
                                                    <td>{!!jdate( $val->created_at  )!!}</td>
                                                @endforeach
                                            @endforeach


                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>


                        </div>
                    </div>
                    <hr>


                    <div class="col-md-12">

                        <div class="ads-you"><br>


                            @foreach(Auth::user()->formads as $formad)
                                <div class="delete-ads">
                                    <div class="container-fluid">
                                    <div class="row">


                                        <div class="col-md-12">

                                            <img src="{{asset($formad->img)}}" width="150" height="150" alt="test"><br>
                                            <div class="content-adsprofile">
                                                @if($formad->status =='on')
                                                    <mark>منتشر شده</mark>
                                                @endif
                                                @if($formad->status !=='on' && $formad->status !=='paying')
                                                    <mark>در حال بررسی</mark>
                                                @endif
                                                @if($formad->status =='paying' && $formad->status !='off' && $formad->status !='on' )
                                                    <mark>آگهی هزینه ای</mark>
                                                @endif
                                            </div>
                                <form action="{{route('formads.delprofile',$formad->id)}}" method="post" >
                                    {{csrf_field()}}

                                    {{method_field('DELETE')}}

                                    <a href="#" class="link-delete"><button type="submit" class="btn btn-danger"><i class="fa fa-trash "> </i></button></a>
                                </form>

                                        </div>

                                    </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <br>
                        <hr>


                        <div class="row">
                            <div id="gold1" class="col-md-3"><br>
                                <h3>طرح طلایی</h3>
                                این طرح شامل:
                                <ul><br>
                                    <li>ثبت آگهی رایگان در سایت</li>
                                    <hr>
                                    <li>قرار گرفتن آگهی شما در پست و استوری پیج اینستاگرام</li>
                                    <hr>
                                    <li>  قرار گرفتن آگهی شما در صفحات فیسبوک و آپارات و کانال تلگرام </li>
                                    <hr>
                                    <li>فرستادن پیام آگهی شما به صورت پیامک به 2000خط فعال کشوری</li>
                                    <hr>
                                </ul>
                                <p>هزینه طرح طلایی
                                    <mark>مبلغ 130 هزار تومان</mark>
                                    می باشد
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                            <div id="silver1" class="col-md-4"><br>
                                <h3>طرح نقره ای</h3>
                                این طرح شامل:
                                <ul><br>
                                    <li>ثبت آگهی رایگان در سایت</li>
                                    <hr>
                                    <li>قرار گرفتن آگهی شما دراستوری پیج اینستاگرام</li>

                                    <hr>
                                    <li>  قرار گرفتن آگهی شما در صفحات فیسبوک و آپارات و کانال تلگرام </li>
                                    <hr>
                                    <li>فرستادن پیام آگهی شما به صورت پیامک به1000 خط فعال کشوری</li>
                                    <hr>
                                </ul>
                                <p>هزینه طرح نقره ای
                                    <mark>مبلغ 80 هزار تومان</mark>
                                    می باشد
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                            <div id="bronz1" class="col-md-3"><br>
                                <h3>طرح برنزی</h3>
                                این طرح شامل:
                                <ul><br>
                                    <li>ثبت آگهی رایگان در سایت</li>
                                    <hr>
                                      <li>  قرار گرفتن آگهی شما در صفحات فیسبوک و آپارات و کانال تلگرام </li>
                                    <hr>

                                    <li>فرستادن پیام آگهی شما به صورت پیامک به 500خط فعال کشوری</li>
                                    <hr>
                                </ul>
                                <p>هزینه طرح برنزی
                                    <mark>مبلغ 50 هزار تومان</mark>
                                    می باشد
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <br>
                    <hr>

                    <div class="form-ads-user col-md-9" id="form-reg-ads"><br>
                        <h4>فرم ثبت آگهی</h4><br><br>
                        <form action="{{route('formads.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label>نام گمشده:</label><input type="text" name="name" placeholder="name" class="form-control" required value="{{old('name')}}"><br>
                            <div class="cat-form">
                                <label>دسته بندی:</label><select name="category" class="col-md-10 form-control" value="{{old('category')}}">
                                    @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                    @endforeach</select><br>
                            </div>

                            <label>طرح آگهی</label> <select name="price" class="col-md-10 form-control" value="{{old('price')}}">
                                 <option value="رایگان" selected>رایگان</option>
                                <option value="طلایی" >طلایی</option>
                                <option value="نقره ای " disabled>نقره ای</option>
                                <option value="برنزی" disabled>برنزی</option>

                            </select><br>

                            <label>شماره تماس:</label><input type="number" name="phone" placeholder="phone" class="form-control" required value="{{old('phone')}}"><br>
                            <label>نام شهر و آدرس:</label><input type="text" name="address" placeholder="address" class="form-control" value="{{old('address')}}" required ><br>
                            <label>مبلغ مژدگانی:</label><input type="number" name="mojdegani" placeholder="mojdegani" class="form-control" value="{{old('mojdegani')}}" required><br>
                            <label class="switch" hidden>
                                <input class="switch-input" type="checkbox" name="status">
                                <span class="switch-label" data-on="on" data-off="off"></span>
                                <span class="switch-handle"></span>
                            </label>
                            <br>

                            <label for="img">انتخاب عکس:</label>
                            <input type="file" id="img" name="img" value="{{old('img')}}" required><br><br>

                            توضیحات:<textarea name="content" id="" cols="30" rows="10" class="form-control" value="{{old('content')}}" required></textarea><br><br>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalLong">
                                قوانین سایت
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">قوانین سایت</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <ol style="line-height: 35px;">قوانین
                                                <p>به منظور بهبود تجربه‌ی کاربری، شرایط زیر برای ثبت آگهی در گم و پیدا
                                                    وضع شده‌اند. رعایت این موارد، علاوه بر افزایش رضایت کاربران، منجر به
                                                    اثربخشی هرچه بیشتر آگهی‌ها نیز می‌گردد</p>
                                                <li value="1"> آگهی منتشر شده
                                                    <mark> به مدت1 ماه</mark>
                                                    بر روی وب سایت گم و پیدا باقی می‌ماند و در صورت عدم تمدید، آگهی
                                                    منقضی شده پاک می‌شود
                                                </li>
                                                <hr>
                                                <li> با شماره موبایل و نام کاربری
                                                    <mark>در روز فقط یک آگهی می توانید ثبت کنید</mark>
                                                    .ثبت بیش از یک آگهی در روز باعث حذف تمام آگهی های شما می شود
                                                    (اینکاربرای بازدید آگهی های دیگر کاربران می باشد)
                                                </li>
                                                <hr>
                                                <li> گم و پیدا استارتاپی برای رفع مشکلات هموطنان میباشد لذا
                                                    <mark>مسئولیتی نسبت به سو استفاده از آگهی ها ندارد</mark>
                                                    پس لطفا قبل از دیدار حضوری اطمینان از گمشده خود پیدا کنید
                                                </li>
                                                <hr>
                                                <li>هر نوع سو استفاده از نماد و لوگو و نام گم و پیدا وآگهی های ثبت شده
                                                    در این وب سایت پیگرد قانونی دارد.
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="modal-footer">

                                            <hr>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">خروج
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br><br>
                            <div class="wow animate__shakeX" data-wow-offset="10" data-wow-iteration="1"><input
                                    type="checkbox" required> قوانین را قبول دارم
                            </div>
                            <br><br>
                            <button type="submit" class="btn btn-success">ارسال آگهی</button>

                            <br><br>

                            <br>

                            <br><br>

                        </form>

                    </div>
                    <br><br><br>
                </div>
            </div>
        </div>


    </div>

    </div>
@endsection






