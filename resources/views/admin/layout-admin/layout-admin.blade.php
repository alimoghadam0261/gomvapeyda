<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مدیریت</title>
    <link rel="icon" type="image/png" href="{{asset('../img/logo/fav.png')}}">

    <link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('../css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/dashbord.css')}}">
    <link rel="stylesheet" href="{{asset('../css/a.css')}}">


</head>
<body>
<div class="main">
    <div class="header"><br>
        <div class="container">
            <div class="row">
                <div class="wellcome col-md-4">
                    <h4>well come {{auth()->user()->name}}</h4>
                </div>
                <div class="btn-header-site col-md-2">
                    <a href="{{route('index')}}">
                        <button class="btn btn-outline-primary">نمایش سایت</button>
                    </a>
                </div>
                <div class="btn-header-exit col-md-2">
                    <a href="{{route('logout')}}">
                        <button class="btn btn-danger">خروج</button>
                    </a>
                </div>
                <div class="col-md-4">
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">جستجو</button>
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            @include('admin.layout-admin.sidebar-admin.sidebar-admin')
            <div class="col-md-10">
@yield('content')
            </div>
        </div>

    </div>
</div>


<script src="{{asset('../js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('../js/bootstrap.min.js')}}"></script>
<script src="{{asset('../js/fontawesome.min.js')}}"></script>
<script src="{{asset('../js/main.js')}}"></script>
<script src="/path-to-your-tinymce/tinymce.min.js"></script>
<script>
    var editor_config = {
        path_absolute : "/",
        selector: 'textarea#editor',
        relative_urls: false,
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table directionality",
            "emoticons template paste textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        file_picker_callback : function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
            if (meta.filetype === 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.openUrl({
                url : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no",
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });
        }
    };

    tinymce.init(editor_config);
</script>
</body>
</html>
