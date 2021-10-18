@extends('admin.layout-admin.layout-admin')
@section('content')

    <div class="col-md-10">
      <span>  تعداد کل:</span>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>نام</th>
            <th>ایمیل</th>
            <th>توضیحات</th>

            <th>حذف</th>
        </tr>
        </thead>
        <tbody>
@foreach($about as $aboute)
        <tr class="table tab-content">

            <td>{{$aboute->name}}</td>
            <td>{{$aboute->email}}</td>
            <td>{{$aboute->content}}</td>

            <td>  <form action="{{route('aboute.destroy',$aboute->id)}}" method="post" >
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" >
                        <i class="fa fa-trash fa-2x" style="color: red"></i>
                    </button>
                </form></td>
        </tr>

@endforeach
        </tbody>
    </table>
    </div>
@endsection
