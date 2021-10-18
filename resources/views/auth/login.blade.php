@extends('layouts.layout')
@section('title')گم و پیدا
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4  login-soical">
                <hr>
               <br>
                <h3> ورود آسان با گوگل ایمیل</h3><br>
                <img src="{{asset('/img/arrow1.gif')}}" class="arrow1" alt="arrow" width="80px" height="80px"><br>
                <a href="{{route('auth.google')}}"><button class="btn-danger googlebtn"> <i class="fa fa-google"> ورود با اکانت گوگل </i> </button> </a><br>

                <hr>
            </div>
            <div class="col-md-4 login">
                <h4>فرم ورود</h4>
                <hr>



<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل:') }}</label>

        <div class="col-md-12">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمزعبور:') }}</label>

        <div class="col-md-12">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('مرا به خاطر بسپار') }}
                </label>
            </div>
        </div>
    </div>
    <div class="form-group mt-5" required>

        {!! NoCaptcha::renderJs() !!}
        {!! NoCaptcha::display() !!}

    </div>


    <div class="form-group row mb-0">
        <div class="col-md-12 ">
            <button type="submit" class="btn btn-success">
                {{ __('ورود') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('رمز عبور را فراموش کرده ام') }}
                </a>
            @endif
        </div>
    </div>
    <hr>
    <a href="{{route('register')}}">هنوز ثبت نام نکرده ام!</a>
</form>


</div>
<div class="col-md-4"></div>




</div>
</div>

@endsection
