@extends('layouts.layout')
@section('title')رسید پرداخت
@endsection
@section('content')

    {{dd($transaction)}}
    <br><br><br>

    <div class="main-check">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>گم و پیدا</h2>
                    <h4>رسید پرداخت</h4><br>
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

                            <td>{{$transaction->amount}}</td>
                            <td>{{$transaction->refid}}</td>
                            <td>{!!jdate($transaction->paid_at)!!}</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
                <a href="{{route('index')}}"><button class="btn btn-primary" >خانه</button></a>
                <a href="{{route('formads.index')}}" style="margin-right: 10px"><button class="btn btn-success">پروفایل شما</button></a>

            </div>
        </div>
    </div>







@endsection
