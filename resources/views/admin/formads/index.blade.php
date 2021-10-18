@extends('admin.layout-admin.layout-admin')

@section('content')



    <div class="col-md-10">

    <span>  تعداد کل:{{$count}}</span>

    <hr>

    <table class="table table-striped">

        <thead>

        <tr>
            <th>شماره</th>
            <th>نام</th>

            <th>دسته بندی </th>

            <th>طرح آگهی </th>

            <th> تلفن </th>

            <th>آدرس</th>

            <th>مژدگانی</th>

            <th>تاریخ ثبت</th>

            <th>عکس</th>

            <th>وضعیت</th>

            <th>توضیحات</th>

            <th>ویرایش</th>

            <th>حذف</th>

        </tr>

        </thead>

        <tbody>

@foreach($formads1 as $ad)

        <tr class="table table-striped">


            @php $i=10 @endphp
            <td>{{ $loop->iteration }}</td>

            <td>{{$ad->name}}</td>

            <td>@foreach($ad->categories as $cat){{$cat->title}}@endforeach</td>

            <td>{{$ad->price}}</td>

            <td>{{$ad->phone}}</td>

            <td>{{$ad->address}}</td>

            <td>{{$ad->mojdegani}}</td>

            <td>{!! jdate($ad->created_at) !!}</td>

            <td><img src="/{{$ad->img}}" width="100" height="60" alt="ads"> </td>

            <td>

               @if ($ad->status == 'on')<span style="color: green">منشر شده</span> @else <span style="color: red">پیش نویس </span> @endif

            </td>

            <td>{{$ad->content}}</td>

            <td><a href="{{route('formads.edit',$ad->id)}}"><i class="fa fa-edit fa-2x" style="color: blue"></i></a></td>

            <td>  <form action="{{route('formads.destroy',$ad->id)}}" method="post" >

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

        <div class="pagination col-md-4"><p>{{$formads1->links()}}</p></div><br><br>



    </div>

@endsection

