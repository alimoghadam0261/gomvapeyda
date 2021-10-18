@extends('admin.layout-admin.layout-admin')
@section('content')

    <div class="col-md-10">
    <a href="{{route('category.create')}}"><button class="btn btn-outline-dark">افزوزدن منو</button></a>
    <span>  تعداد کل:{{$count}}</span>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>عنوان</th>
            <th>ترتیب</th>
            <th>وضعیت</th>
            <th>ویرایش</th>
            <th>حذف</th>
        </tr>
        </thead>
        <tbody>
@foreach($cat as $category)
        <tr class="table tab-content">

            <td>{{$category->title}}</td>
            <td>{{$category->sort}}</td>
            <td>{{$category->status}}</td>
            <td><a href="{{route('category.edit',$category->title)}}"><i class="fa fa-edit fa-2x" style="color: blue"></i></a></td>
            <td>  <form action="{{route('category.destroy',$category->title)}}" method="post" >
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" >
                        <i class="fa fa-trash fa-2x" style="color: red"></i>
                    </button>
                </form></td>

        </tr>
        <?php
        $subcategory=\App\Models\Category::where('parrent','=',$category->title)->get();
        ?>
@foreach($subcategory as $subcat)
        <tr class="table tab-content">

            <td><i class="fa fa-reply"></i>{{$subcat->title}}</td>
            <td>{{$subcat->sort}}</td>
            <td>{{$category->status}}</td>
            <td><a href="{{route('category.edit',$subcat->title)}}"><i class="fa fa-edit fa-2x" style="color: blue"></i></a></td>
            <td>
            <form action="{{route('category.destroy',$subcat->title)}}" method="post" >
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" >
            <i class="fa fa-trash fa-2x" style="color: red"></i>
                </button>
            </form>
            </td>

        </tr>
@endforeach
@endforeach

        </tbody>
    </table>
    </div>
@endsection
