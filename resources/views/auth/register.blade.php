@extends('layouts.layout')
@section('title')صفحه ثبت نام
@endsection
@section('content')
    <!----------------------------main--------------------------------------------->
    <div class="main-reg">




        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 nokteh">

                    <div class="main-text-reg">

                        <h3>یادآوری</h3><br>
                        <p>لطفا اطلاعاتی مثل ایمیل و شماره تماس را درست وارد نمایید تا در صورت پیدا شدن گمشده خود مجموعه
                            گم و پیدا بتواند اطلاع رسانی کند</p>
                        <br>
                    </div>
                    <hr>
                    <div class="soical-text-reg"><br>
                        <div class="faicon">
                            <a href="https://www.instagram.com/gomvapeyda.ir"> <i class="fa fa-instagram fa-2x"
                                                                                  id="fa-instagram1"></i></a>
                            <a href="https://t.me/gomvapeyda"> <i class="fa fa-telegram fa-2x"
                                                                  id="fa-telegram1"></i></a>
                            <a href="https://www.facebook.com/gom.peyda"> <i class="fa fa-facebook fa-2x"
                                                                             id="fa-facebook1"></i></a>
                            <a href="https://www.aparat.com/gomvapeyda"> <i class="fa fa-file-movie-o fa-2x"
                                                                            id="fa-file-movie-o1"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 form-reg">
                    <br>
                    <h4>فرم ثبت نام</h4>
                    <hr>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام:') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone"
                                   class="col-md-4 col-form-label text-md-right">{{ __('شماره موبایل:') }}</label>
                            <div class="col-md-12">
                                <input id="phone" type="number" name="phone_number" class="form-control" >
                                @error('phone_number')
                                {{$message}}
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل:') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور:') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمز عبور') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('ثبت نام') }}
                                </button>
                            </div>

                        </div>
                    </form>
                    <br>
                    <hr>
                    <div class="text">
                        <a href="{{route('login')}}">اگر قبلا ثبت نام کرده اید وارد شوید</a><br><br></div>

                </div>
                <div class="col-md-4  login-soical">
                    <hr>
                    <br>
                    <h3> ورود آسان با گوگل ایمیل</h3><br>
                    <img src="{{asset('/img/arrow1.gif')}}" class="arrow1" alt="arrow" width="80px" height="80px"><br>
                    <a href="{{route('auth.google')}}"><button class="btn-danger googlebtn"> <i class="fa fa-google"> ورود با اکانت گوگل </i> </button> </a><br>

                    <hr>
                </div>

            </div>
        </div>
<div class="col-md-2"></div>

@endsection
