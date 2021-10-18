@extends('admin.layout-admin.layout-admin')
@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <p class="title-form">افزودن منو جدید</p><br>
                    <label>عنوان</label><input type="text" placeholder="title" name="title"
                                               class="form-control col-md-8" required><br>
                    <label>ترتیب نمایش</label><input type="text" placeholder="sort" name="sort"
                                                     class="form-control col-md-8" required><br>
                    <label>سرگروه</label>
                    <select name="parrent" class="form-control col-md-8">
                        <option value="0">سرگروه</option>
                        @foreach($cat as $cat1)
                            <option value="{{$cat1->id}}">{{$cat1->title}}</option>
                        @endforeach



                    </select>
                    <label>وضعیت</label><input type="checkbox" name="status" checked data-toggle="toggle"
                                               class="form-control col-md-1"><br>
                    <button class="btn btn-outline-success" type="submit">ارسال</button>
                </form>




@endsection






