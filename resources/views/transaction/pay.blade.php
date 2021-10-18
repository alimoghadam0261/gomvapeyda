@extends('layouts.layout')
@section('title')رسید پرداخت
@endsection
@section('content')
    <br><br><br>

    <div class="main-check">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>گم و پیدا</h2>
                    <h4>رسید پرداخت</h4><br>
                    <table class="table-active">
                        <thead class="table-bordered">
                        <tr>
                            <th>مبلغ</th>
                            <th>شماره پیگیری</th>
                            <th>تاریخ پرداخت</th>
                        </tr>
                        </thead>
                        <tbody class="table-striped">
                        <tr>

                            <td>{{$transaction->amout}}</td>
                            <td>{{$transaction->refid}}</td>
                            <td>{{$transaction->paid_at}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>







@endsection
