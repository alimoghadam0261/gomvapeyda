@extends('layouts.layout')

@section('title')تغییر رمز

@endsection



@section('content')

    <br><br><br>

<div class="container">

    <div class="row justify-content-center">


        <div class="reset-pass col-md-8">

            <div class="card">

                <div class="card-header reset-pass-header">{{ __('تغییر رمز') }}</div>



                <div class="card-body">

                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>

                    @endif



                    <form method="POST" action="{{ route('password.email') }}">

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



                        <div class="form-group row mb-0">

                            <div class="col-md-6 offset-md-4">

                                <button type="submit" class="btn btn-success ">

                              {{ __('ارسال لینک تغییر رمز') }}

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>
        <div class="col-md-4">
            <h3>بازیابی رمز عبور</h3>
            <p>هموطن عزیز لطفا ایمیلی که ثبت نام کرده اید را در باکس بنویسید و ارسال لینک را بزنید تا ایمیلی برای تغییر رمز عبور برایتان فرستاده شود</p>
            <img src="{{asset('img/arrow.png')}}" alt="arrow" width="50%"
                 height="50%" style="margin-left: 40px">
        </div>

    </div>

</div>

@endsection

