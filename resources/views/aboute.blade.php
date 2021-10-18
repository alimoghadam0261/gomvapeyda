@extends('layouts.layout')
@section('title')درباره ما
@endsection
@section('content')
<br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class=" aboute-content col-md-9">
            <h3>درباره ما:</h3><br>
            <p>باسلام و احترام به هم وطن های عزیز
                مجموعه ما در سال 1400 به منظور طراحی و برنامه نویسی ایجاد شد. هدف اصلی و پیشبردی
                مجموعه
                ایجاد اشتغال و انگیزه در بین جوانان کشور بوده و از طرح های جدید و ایده های نو استقبال کرده و در تلاش است
                به منظور
                راحتی و آسایش هم وطنان گامی هرچند کوچک را بردارد.
                ایده گم و پیدا ایده ای نو بوده و جای خالیش در زندگی روزمره ما احساس می شد.لذا برآن شدیم با تیم خود این
                ایده را به صورت عملی پیاده سازی کنیم و ان را به صورت رایگان در اختیار شما عزیزان قرا دهیم
                استارت آپ های جدید و دیگری نیز به صورت ایده و طرح اولیه در حال بررسی می باشد.
                اما سایت گم و پیدا با هدف کمک به یکدیگر طراحی و راه اندازی شده است و در آینده تلاش برآن داریم تا با
                حمایت نیروی انتظامی و دیگر ارگانها این استارتاپ را در حوزه عملیاتی خیلی وسیع تر کنیم. </p>
            <p>مجموعه ما با هدف کمک اجتماعی برای زندانیان غیر عمد برآن شده تا 10% از درآمد ماهانه را به این موضوع اختصاص دهد.به طبع از طریق شبکه های اجتماعی این موضوع به طور کامل اطلاع رسانی می شود.</p>
            <h3>آشنایی با ما:</h3><br>
            <ul>
                <a href="#ahdaf">
                    <li>اهداف مجموعه</li>
                </a>

                <a href="##azaye sherkat">
                    <li>اعضای مجموعه</li>
                </a>
                <a href="#contact us">
                    <li>ارتباط با ما</li>
                </a>
            </ul>
            <h3><mark>اهداف مجموعه</mark></h3><br>
            <p id="ahdaf"> مجموعه در نظر دارد تا با طراحی و اجرا در فاز اول (وب و اپلیکشن ) قدم در بازار رقابتی بگذارد
                اما تمام هدف ما بحث ایجاد بستر مناسب در زمینه ای تخصصی برای رفاه عموم جامعه در هر شهری می باشد.لذا تقاضا
                داریم در صورت امکان با حمایت معنوی و مالی ما را در پیشبرد کمک به هموطنان یاری کنید</p>
            <p> راه اندازی فاز های بعدی این استارت آپ و راه اندازی 3استارت آپ دیگر که همگی در حال بررسی و رفع مشکلات اجرایی هستند که همگی باعث ایجاد اشتغال برای جوانان عزیز ایران می باشد .در حال حاضر 20 نفر به طور مستقیم مشغول به فعالیت شده اند و طبق برآورد ، اجرای هر فاز حدود 20 تا 25 نفر اشتغال زایی خواهد کرد</p>
            <br>
            <hr>


            <h3 id="#azaye sherkat"><mark>اعضای مجموعه</mark></h3><br>
<div class="main-pesonal">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('img/collaegue/2.jpeg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">مدیر عامل</h5>
    <p class="card-text">محمدعلی مقدم. کارشناس ارشد آی تی برنامه نویس و طراح</p>
    <div class="fa-social">
            <i class="fa fa-telegram fa-2x"></i>
            <i class="fa fa-instagram fa-2x"></i>
            <i class="fa fa-twitter fa-2x"></i>
            </div>
  </div>
</div>
          <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('img/collaegue/sina.jpeg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">مدیر داخلی</h5>
    <p class="card-text">سینا ابرند. کارشناس عمران مدیریت مالی و داخلی</p>
    <div class="fa-social">
            <i class="fa fa-telegram fa-2x"></i>
            <i class="fa fa-instagram fa-2x"></i>
            <i class="fa fa-twitter fa-2x"></i>
            </div>
  </div>
</div>
          <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('img/collaegue/tina.jpeg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">مدیر شبکه های مجازی</h5>
    <p class="card-text">تینا ابرند. کارشناس برق . مدیریت شبکه های مجازی</p>
    <div class="fa-social">
            <i class="fa fa-telegram fa-2x"></i>
            <i class="fa fa-instagram fa-2x"></i>
            <i class="fa fa-twitter fa-2x"></i>
            </div>
  </div>
</div>

          </div>





        <br><br><br>
            <hr>
            <h3 id="contact us"><mark>تماس با ما</mark></h3><br>
            <p>با پیشنهادات و انتقادادت خود ما را در این مسیر یاری کنید</p><br>
            <form action="{{route('aboute.store')}}" method="post" class="form-check1">
                @csrf
                <label>نام شما:</label><input type="text" placeholder="name" name="name" class="form-control" required><br>
                <label>ایمیل:</label><input type="email" placeholder="email" name="email" class="form-control" required><br>
                <label>نظر شما:</label><textarea type="text"  cols="30" rows="10" name="content" class="form-control"></textarea><br>
                <button type="submit" class="btn btn-success">ارسال</button>
                <br><br><br>

            </form>
        </div>




        <div class="aboute-side-bar col-md-3">
            <h4>شبکه های اجتماعی ما:</h4><br>
            <a href="https://t.me/gomvapeyda"><i class="fa fa-telegram fa-2x"></i></a>
            <a href="http://www.aparat.com/gomvapeyda"><i class="fa fa-file-movie-o fa-2x"></i></a>
            <a href="https://www.instagram.com/gomvapeyda"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="https://www.facebook.com/gomvapeyda/"><i class="fa fa-facebook-square fa-2x"></i></a><br>
            <hr>
            <a href="{{route('hemayat.index')}}">
                <button class="hemayat-button wow animate__shakeX" data-wow-offset="80" data-wow-iteration="3"
                        data-wow-duration="5s">حمایت از ما
                </button>
            </a>
            <hr>
            <h4>ایمیل :</h4><br>
            <p>gomvapeyda@info.com</p><br> <hr>
            <h4>شماره تماس:</h4><br>

            <a href="tel:02634239174">026-34239174</a><br> <hr>
            <h4>آدرس:</h4><br>
            <p>کرج مهرویلا خیام غربی</p> <hr>
            <h3>ساعت  کاری:</h3>
            <h5>8:00الی 16:00</h5>
            <p>بعد از ساعت کاری از طریق چت آنلاین و ارسال ایمیل در خدمت هموطنان عزیز خواهیم بود و آگهی ها تا ساعت 23:00 تایید می شوند</p><br>
            <hr>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.2637598041483!2d50.95850348539055!3d35.81800383006737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dbe5f19ab5389%3A0x16c58401c3d316ff!2z2KfYs9iq2KfZhiDYp9mE2KjYsdiy2Iwg2qnYsdis2Iwg2YXZh9ix2YjbjNmE2KfYjCDYrtuM2KfZhSDYutix2KjbjNiMINin24zYsdin2YY!5e0!3m2!1sfa!2s!4v1613330177945!5m2!1sfa!2s" width="300" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>


@endsection
