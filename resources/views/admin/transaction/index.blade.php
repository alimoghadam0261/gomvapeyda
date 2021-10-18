@extends('admin.layout-admin.layout-admin')

@section('content')



    <div class="col-md-10">

        <span>  تعداد کل تراکنش ها: </span>{{$count}}

        <hr>

        <table class="table table-striped">

            <thead>

            <tr>

                <th>شماره</th>
                <th>ID</th>

                <th>نام</th>

                <th>مبلغ</th>

                <th>شماره پیگیری</th>

                <th>تاریخ پرداخت</th>


            </tr>

            </thead>

            <tbody>



            @foreach($transaction as $item)
                <tr class="table tab-content">
                     @php $i=10 @endphp
                      <td>{{ $loop->iteration }}</td>

                    <td>{{$item->formads_id}}</td>




         

                    <td>{{$item->formads_id}}</td>


                    <td>{{$item->amount}}</td>

                    <td>{{$item->refid}}</td>

                    <td>{!! jdate(($item->paid_at)) !!}</td>





                </tr>


            @endforeach


            </tbody>

        </table>

    </div>

@endsection



