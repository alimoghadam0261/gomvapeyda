@extends('admin.layout-admin.layout-admin')
@section('content')


    <br>

    <div class="form-ads-user col-md-10">
        <h4 id="form-reg-ads">فرم ثبت آگهی</h4>
        <hr>
        <form action="{{route('formads.update', $formads->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <label>نام:</label><input type="text" name="name" value="{{$formads->name}}"
                                      class="form-control"
                                      required><br>
            <label>دسته بندی</label> <select name="category" class="col-md-10 form-control">

                @foreach($category as $cat)
                    <option value="{{$cat->title}}">{{$cat->title}}</option>
                @endforeach
                {{--                        <option value="انسان">انسان</option>--}}
                {{--                        <option value="حیوانات">حیوانات</option>--}}
                {{--                        <option value="مدارک هویتی">مدارک هویتی</option>--}}
                {{--                        <option value="وسایل نقلیه">وسایل نقلیه</option>--}}
                {{--                        <option value="وسایل الکترونیکی">وسایل الکترونیکی</option>--}}
                {{--                        <option value="دیگر">دیگر</option>--}}

            </select><br>
            <label>طرح آگهی</label> <select name="price" class="col-md-10 form-control">

                <option> {{$formads->price}}</option>
                <option value="رایگان">رایگان</option>
                <option value="طلایی">طلایی</option>
                <option value="نقره ای">نقره ای</option>
                <option value="برنزی">برنزی</option>


            </select><br>

            <label>شماره تماس:</label><input type="number" name="phone" value="{{$formads->phone}}"
                                             class="form-control" required><br>
            <label>آدرس:</label><input type="text" name="address" placeholder="address" value="{{$formads->address}}"
                                       class="form-control" required><br>
            <label>مبلغ مژدگانی:</label><input type="text" name="mojdegani" placeholder="mojdegani"
                                               value="{{$formads->mojdegani}}"
                                               class="form-control" required><br>


            <label for="img">انتخاب عکس:</label>
            <input type="file" id="img" name="img"><br><br>
            <img src="/{{$formads->img}}" alt="ads" width="250px" height="200px"><br><br>

            <div class="col-md-12" style="background: #d1d4ca">
                منشر شود؟ <label class="switch">
                    <input class="switch-input" type="checkbox" name="status" value="{{$formads->status}}"
                           @if ($formads->status== 'on') checked @endif>


                    <span class="switch-label" data-on="on" data-off="off"></span>
                    <span class="switch-handle"></span>
                </label>
            </div>

            <br>
            توضیحات:<textarea name="content" id="" cols="30" rows="10"
                              class="form-control">{{$formads->content}}</textarea><br><br>
            <button type="submit" class="btn btn-success">انتشار آگهی</button>

            <br><br>

            <br>

            <br><br>

        </form>

    </div>
    <br><br><br>

    </div>
    </div>
    </div>



    </div>

    </div>
@endsection












