@extends('admin.layout-admin.layout-admin')
@section('content')

    <div class="col-md-10">
        <a href="{{route('slider.create')}}"><button class="btn btn-dark">افزودن اسلایدر</button></a>
        <span>تعداد کل: {{$count}}</span>
        <hr>
        <br>
    <table class="table">
<thead>
<tr class="table table-danger">
<th>عنوان</th>
<th>محتوا</th>
<th>عکس</th>
<th>تغییرات</th>
<th>حذف</th>
</tr>
</thead>
        <tbody>
        @foreach($sliders as $slider)
        <tr class="table table-hover">

            <td>{{$slider->title}}</td>
            <td>{{$slider->content}}</td>
            <td><img src="/{{$slider->img}}" alt="" width="150" height="100"></td>
            <td><a href="{{route('slider.edit',$slider->id)}}"><i class="fa fa-edit fa-2x" style="color: blue"></i></a></td>
            <td><a href=""><i class="fa fa-trash fa-2x" style="color: #ff0000"></i></a></td>
        </tr>
        @endforeach

        </tbody>
    </table>
@endsection
