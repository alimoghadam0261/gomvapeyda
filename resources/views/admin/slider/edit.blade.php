@extends('admin.layout-admin.layout-admin')
@section('content')

    <div class="col-md-10">
        <div class="content-panel">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <p class="title-form">ویرایش آگهی جدید</p>
                        <form action="{{route('slider.update' , $slider->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-9">


                                    <input class="form-control inputbig" type="text" name="title"
                                           value="{{$slider->title}}" required>

                                    <br>
                                    <textarea class="form-control" name="content" id="body" aria-hidden="true"
                                              rows="12">
{{$slider->content}}
                                        </textarea>

                                    <br>


                                </div>

                                <div class="col-md-3">

                                    <div class="box-widget">
                                        <h5>ذخیره : </h5>
                                        <button class="btn btn-success" type="submit">
                                            ذخیره پست
                                        </button>
                                    </div>
                                    <hr>
                                    <div class="box-widget">
                                        <h5>تصویر شاخص</h5>
                                        <img src="/{{$slider->img}}" alt="ads" width="100%" height="100%">
                                        <br>
                                        <hr>
                                        <input type="file" name="image">
                                    </div>

                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection






