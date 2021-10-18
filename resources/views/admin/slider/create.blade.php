@extends('admin.layout-admin.layout-admin')
@section('content')

    <div class="col-md-10">
        <div class="content-panel">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <p class="title-form">افزودن اسلایدر جدید</p>
                        <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-9">


                                    <input class="form-control inputbig" type="text" name="title"
                                           placeholder="عنوان را اینجا وارد کنید" required>

                                    <br>
                                    <textarea class="form-control" name="content" id="mytextarea" aria-hidden="true"
                                              rows="12">

                                        </textarea>

                                    <br>


                                </div>

                                <div class="col-md-3">

                                    <div class="box-widget">
                                        <h5>انتشار : </h5>
                                        <button class="btn btn-success" type="submit">
                                            انتشار اسلایدر
                                        </button>
                                    </div>
                                    <hr>

                                    <div class="box-widget">
                                        <h5>تصویر شاخص</h5>
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






