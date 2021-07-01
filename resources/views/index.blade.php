<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{{ asset('') }}"/>
        <meta charset="utf-8">
        <title>Say old yeah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Say old year" name="description">
        <meta content="DevTu" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">
        <!-- Cropper css -->
        <link href="assets\libs\cropper\cropper.min.css" rel="stylesheet" type="text/css">
        <!-- Plugins css-->
        <link href="assets\libs\sweetalert2\sweetalert2.min.css" rel="stylesheet" type="text/css">
        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">
        <style>
            body{
            font-family: Montserrat,sans-serif;
            }
            .content-page{
            margin: 0;
            }
            .footer{
            left: 0;
            }
            .c-black{
            color: black;
            }
            .conversation-list{
            max-height: 330px !important;
            }
            .conversation-list .ctext-wrap p {
            text-align: left;
            }
        </style>
    </head>
    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">🐧🐧🐧🐧🐧 Yêu <a href="https://www.facebook.com/profile.php" style="color: red;text-decoration: revert;">cậu</a> nhiều lắm ó 🤭🤭🤭🤭🤭🤭🤭</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">XXX</a></li>
                                            <li class="breadcrumb-item"><a href="#">Thư mục đen</a></li>
                                            <li class="breadcrumb-item active">Một hai ba bốn</li>
                                        </ol>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-header py-3 bg-transparent">
                                        <div class="card-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h5 class="header-title mb-0">Chat</h5>
                                    </div>
                                    <div id="cardCollpase3" class="collapse show">
                                        <div class="card-body">
                                            <div class="chat-conversation">
                                                <ul class="conversation-list slimscroll" style="min-height: 300px;">
                                                    @foreach($messages as $message)
                                                    <li class="clearfix @if($message->from == $data->user_id) odd @endif">
                                                        <div class="chat-avatar">
                                                            <img src="assets\images\users\avatar-1.jpg" alt="male">
                                                            <i></i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>{{ $message->from }}</i>
                                                                <p>
                                                                    {{ $message->message }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                <div class="row mt-3">
                                                    <div class="col-3 chat-inputbar">
                                                        <input type="text" class="form-control name-input" id="name-input" placeholder="Nhập tên">
                                                    </div>
                                                    <div class="col-6 chat-inputbar">
                                                        <input type="text" class="form-control chat-input" placeholder="Nhập tin nhắn">
                                                    </div>
                                                    <div class="col-3 chat-send">
                                                        <button type="submit" class="btn btn-info btn-block">Gửi</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Chat -->
                            </div>
                            <!-- end col-->
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header py-3 bg-transparent">
                                        <div class="card-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h5 class="header-title mb-0"> Todo</h5>
                                    </div>
                                    <div id="cardCollpase4" class="collapse show">
                                        <div class="card-body">
                                            <div class="todoapp">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h6 id="todo-message">
                                                            <span id="todo-remaining">
                                                            </span>
                                                            /
                                                            <span id="todo-total">
                                                            </span>
                                                            công việc chưa làm
                                                        </h6>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="" class="float-right btn btn-primary btn-sm" id="btn-archive">Làm mới </a>
                                                    </div>
                                                </div>
                                                <ul class="list-group slimscroll todo-list" style="max-height: 310px;" id="todo-list">
                                                </ul>
                                                <div class="row">
                                                    <div class="col-9 todo-inputbar">
                                                        <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Thêm công việc">
                                                    </div>
                                                    <div class="col-3 todo-send">
                                                        <button class="btn-info btn-block btn" type="button" id="todo-btn-submit">Thêm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-header py-3 bg-transparent">
                                        <div class="card-widgets">
                                            <a data-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                        </div>
                                        <h5 class="header-title mb-0"> Tạo số random</h5>
                                    </div>
                                    <div id="cardCollpase5" class="collapse show">
                                        <div class="card-body">
                                            <div class="row">
                                                <label for="min-number" class="col-sm-2 col-form-label">Từ</label>
                                                <div class="form-group mb-3 col-sm-3">
                                                    <input class="form-control" type="number" id="min-number" required="" placeholder="Min" value="0">
                                                </div>
                                                <label for="max-number" class="col-sm-2 col-form-label">đến</label>
                                                <div class="form-group mb-3 col-sm-5">
                                                    <input class="form-control" type="number" id="max-number" required="" placeholder="Max" value="100">
                                                </div>
                                                <div class="form-group mb-3 col-sm-12">
                                                    <textarea class="form-control" name="generated-number" id="generated-number" cols="30" rows="3" style="font-size: 40px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row text-center mt-4 mb-4">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" id="random-number-button">Tạo ngẫu nhiên</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- End row -->
                        <div class="row">
                            {{-- Start Van mau section --}}
                            <div class="col-xl-8" id="vanmau-section">
                                <div class="card">
                                    <div class="card-header py-3 bg-transparent">
                                        <div class="card-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h5 class="header-title mb-0">Văn mẫu phản biện</h5>
                                    </div>
                                    <div id="cardCollpase1" class="collapse show" style="font-size: .8rem;">
                                        <div class="card-box">
                                            <div class="tabs-vertical-env">
                                                <div class="row">
                                                    <div class="form-group col-sm-12">
                                                        <input class="form-control" type="text" id="document-search" required placeholder="Nhập từ khóa tìm kiếm">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="nav flex-column nav-pills tabs-vertical" role="tablist" aria-orientation="vertical">
                                                            @foreach($categorys as $category)
                                                            <a class="nav-link category-link mb-2" id="v-{{ $category->id }}-tab" data-toggle="pill" href="#v-{{ $category->id }}" role="tab" aria-controls="v-{{ $category->id }}" aria-selected="true">
                                                            {{ $category->name }}
                                                            </a>
                                                            @endforeach
                                                            <a class="nav-link category-link mb-2" id="v-all-tab" data-toggle="pill" href="#v-all" role="tab" aria-controls="v-all" aria-selected="true">Tất cả</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="tab-content pt-4 pt-md-0">
                                                            @foreach($categorys as $category)
                                                            <div class="tab-pane fade show" id="v-{{ $category->id }}" role="tabpanel" aria-labelledby="v-{{ $category->id }}-tab">
                                                                <div id="accordion-{{ $category->id }}" class="mb-3">
                                                                    @foreach($category->documents->sortBy('title',SORT_NATURAL) as $document)
                                                                    @if ($document->status)
                                                                    <div class="card mb-0">
                                                                        <a href="#collapse{{ $document->id }}" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                                                            <div class="card-header document-title" id="heading{{ $document->id }}">
                                                                                <h6 class="m-0">
                                                                                    {{ $document->title }}
                                                                                </h6>
                                                                            </div>
                                                                        </a>
                                                                        <div id="collapse{{ $document->id }}" class="collapse" aria-labelledby="heading{{ $document->id }}" data-parent="#accordion-{{ $category->id }}" style="">
                                                                            <div class="card-body text-dark" id="content{{ $document->id }}">
                                                                                {{ $document->content }}
                                                                            </div>
                                                                            <button style="width: 100px; margin:auto;" class="btn-info btn-block btn mb-4 copy-btn" type="button" target="#content{{ $document->id }}">Copy</button>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            <div class="tab-pane fade show" id="v-all" role="tabpanel" aria-labelledby="v-all-tab">
                                                                <div id="accordion-all" class="mb-3">
                                                                    @foreach($categorys as $category)
                                                                    @foreach($category->documents->sortBy('title',SORT_NATURAL) as $document)
                                                                    @if ($document->status)
                                                                    <div class="card mb-0">
                                                                        <a href="#collapse{{ $document->id }}" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                                                            <div class="card-header document-title" id="heading{{ $document->id }}">
                                                                                <h6 class="m-0">
                                                                                    {{ $document->title }}
                                                                                </h6>
                                                                            </div>
                                                                        </a>
                                                                        <div id="collapse{{ $document->id }}" class="collapse" aria-labelledby="heading{{ $document->id }}" data-parent="#accordion-all" style="">
                                                                            <div class="card-body text-dark document-content" id="content{{ $document->id }}">
                                                                                {{ $document->content }}
                                                                            </div>
                                                                            <button style="width: 100px; margin:auto;" class="btn-info btn-block btn mb-4 copy-btn" type="button" target="#content{{ $document->id }}">Copy</button>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                    @endforeach
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-->
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header py-3 bg-transparent">
                                        <div class="card-widgets">
                                            <a data-toggle="collapse" href="#cardCollpase6" role="button" aria-expanded="false" aria-controls="cardCollpase6"><i class="mdi mdi-minus"></i></a>
                                        </div>
                                        <h5 class="header-title mb-0"> Cung cấp văn mẫu</h5>
                                    </div>
                                    <div id="cardCollpase6" class="collapse show">
                                        <div class="card-body">
                                            <div class="row">
                                                <label for="document-title" class="col-sm-2 col-form-label">Tiêu đề</label>
                                                <div class="form-group mb-3 col-sm-10">
                                                    <input class="form-control" type="text" id="document-title" required placeholder="Nhập tiêu đề">
                                                </div>
                                                <div class="form-group mb-3 col-sm-12">
                                                    <textarea class="form-control" name="document-content" id="document-content" cols="30" rows="8" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row text-center mt-4 mb-4">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" id="document-post">Cung cấp</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->
                            {{-- End van mau section --}}
                        </div>
                        <!-- End row -->
                        <div class="row image-crop">
                            <div class="col-9">
                                <div class="card">
                                    <div class="card-header py-3 bg-transparent">
                                        <h5 class="header-title mb-0">Cắt ảnh</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="img-container">
                                                    <img id="image" src="assets/images/users/avatar-1.jpg" alt="Picture" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="image-crop-preview clearfix">
                                                    <div class="img-preview preview-lg"></div>
                                                    <div class="img-preview preview-md"></div>
                                                    <div class="img-preview preview-sm"></div>
                                                    <div class="img-preview preview-xs"></div>
                                                </div>
                                                <div class="docs-data">
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                        <label class="input-group-text width-xs" for="dataX">Tọa độ X</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataX" placeholder="x">
                                                        <span class="input-group-append">
                                                        <span class="input-group-text">px</span>
                                                        </span>
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                        <label class="input-group-text width-xs" for="dataY">Tọa độ Y</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataY" placeholder="y">
                                                        <span class="input-group-append">
                                                        <span class="input-group-text">px</span>
                                                        </span>
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                        <label class="input-group-text width-xs" for="dataWidth">Width</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                                        <span class="input-group-append">
                                                        <span class="input-group-text">px</span>
                                                        </span>
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                        <label class="input-group-text width-xs" for="dataHeight">Height</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                                        <span class="input-group-append">
                                                        <span class="input-group-text">px</span>
                                                        </span>
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                        <label class="input-group-text width-xs" for="dataRotate">Rotate</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                                        <span class="input-group-append">
                                                        <span class="input-group-text">deg</span>
                                                        </span>
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                        <label class="input-group-text width-xs" for="dataScaleX">ScaleX</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                        <label class="input-group-text width-xs" for="dataScaleY">ScaleY</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                                                    </div>
                                                </div>
                                                <!-- end .doc-data -->
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col-->
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 docs-toggles mb-3">
                                                <div class="btn-group btn-group-sm d-flex flex-nowrap" data-toggle="buttons">
                                                    <label class="btn btn-outline-success active">
                                                    <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 16 / 9">
                                                    16:9
                                                    </span>
                                                    </label>
                                                    <label class="btn btn-outline-success">
                                                    <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 4 / 3">
                                                    4:3
                                                    </span>
                                                    </label>
                                                    <label class="btn btn-outline-success">
                                                    <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 1 / 1">
                                                    1:1
                                                    </span>
                                                    </label>
                                                    <label class="btn btn-outline-success">
                                                    <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 2 / 3">
                                                    2:3
                                                    </span>
                                                    </label>
                                                    <label class="btn btn-outline-success">
                                                    <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: NaN">
                                                    Free
                                                    </span>
                                                    </label>
                                                </div>
                                                <div class="dropdown dropup docs-options">
                                                    <button type="button" class="btn btn-success btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                                                    Options <i class="mdi mdi-chevron-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu docs-drop-options" aria-labelledby="toggleOptions" role="menu">
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox0" type="checkbox" name="responsive" checked="">
                                                                <label for="checkbox0">
                                                                Responsive
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox1" type="checkbox" name="restore" checked="">
                                                                <label for="checkbox1">
                                                                Restore
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox2" type="checkbox" name="checkCrossOrigin" checked="">
                                                                <label for="checkbox2">
                                                                CheckCrossOrigin
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox3" type="checkbox" name="checkOrientation" checked="">
                                                                <label for="checkbox3">
                                                                CheckOrientation
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox4" type="checkbox" name="modal" checked="">
                                                                <label for="checkbox4">
                                                                Modal
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox5" type="checkbox" name="guides" checked="">
                                                                <label for="checkbox5">
                                                                Guides
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox6" type="checkbox" name="center" checked="">
                                                                <label for="checkbox6">
                                                                Center
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox7" type="checkbox" name="highlight" checked="">
                                                                <label for="checkbox7">
                                                                Highlight
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox8" type="checkbox" name="background" checked="">
                                                                <label for="checkbox8">
                                                                Background
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox9" type="checkbox" name="autoCrop" checked="">
                                                                <label for="checkbox9">
                                                                AutoCrop
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox10" type="checkbox" name="movable" checked="">
                                                                <label for="checkbox10">
                                                                Movable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox11" type="checkbox" name="rotatable" checked="">
                                                                <label for="checkbox11">
                                                                Rotatable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox12" type="checkbox" name="scalable" checked="">
                                                                <label for="checkbox12">
                                                                Scalable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox13" type="checkbox" name="zoomable" checked="">
                                                                <label for="checkbox13">
                                                                Zoomable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox14" type="checkbox" name="zoomOnTouch" checked="">
                                                                <label for="checkbox14">
                                                                ZoomOnTouch
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox15" type="checkbox" name="zoomOnWheel" checked="">
                                                                <label for="checkbox15">
                                                                ZoomOnWheel
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox16" type="checkbox" name="cropBoxMovable" checked="">
                                                                <label for="checkbox16">
                                                                CropBoxMovable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox17" type="checkbox" name="cropBoxResizable" checked="">
                                                                <label for="checkbox17">
                                                                CropBoxResizable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox18" type="checkbox" name="toggleDragModeOnDblclick" checked="">
                                                                <label for="checkbox18">
                                                                ToggleDragModeOnDblclick
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- end .docs-options -->
                                            </div>
                                            <!-- end col -->
                                            <div style="text-align: end;" class="col-lg-12 img-crop-preview-btns docs-buttons">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-sm" data-method="setDragMode" data-option="move" title="Move">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="">
                                                    <span class="mdi mdi-cursor-move"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success" data-method="setDragMode" data-option="crop" title="Crop">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="">
                                                    <span class="mdi mdi-crop"></span>
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success" data-method="zoom" data-option="0.1" title="Zoom In">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Zoom In">
                                                    <span class="mdi mdi-magnify-plus-outline"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                                    <span class="mdi mdi-magnify-minus-outline" data-toggle="tooltip" data-animation="false" title="Zoom Out">
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-sm" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Dịch trái">
                                                    <span class="mdi mdi-arrow-left"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-sm" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Dịch phải">
                                                    <span class="mdi mdi-arrow-right"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-sm" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Dịch lên">
                                                    <span class="mdi mdi-arrow-up"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-sm" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                                    <span class="mdi mdi-arrow-down" data-toggle="tooltip" data-animation="false" title="Dịch xuống">
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-sm" data-method="rotate" data-option="-45" title="Rotate Left">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Xoay trái">
                                                        Xoay trái
                                                    <span class="mdi mdi-rotate-left"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-sm" data-method="rotate" data-option="45" title="Rotate Right">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Xoay phải">
                                                        Xoay phải
                                                    <span class="mdi mdi-rotate-right"></span>
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-sm" data-method="scaleX" data-option="-1" title="Lật ngang">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Lật ngang">
                                                            Lật ngang
                                                            <span class="mdi mdi-arrow-left-right"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-sm" data-method="scaleY" data-option="-1" title="Lật dọc">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Lật dọc">
                                                        Lật dọc
                                                    <span class="mdi mdi-arrow-up-down"></span>
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-sm" data-method="reset" title="Reset">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Reset">
                                                    Reset
                                                    <span class="mdi mdi-sync"></span>
                                                    </span>
                                                    </button>
                                                    <label class="btn btn-success mb-0 btn-upload btn-sm" for="inputImage" title="Upload image file">
                                                    <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Tải ảnh lên">
                                                    Upload
                                                    <span class="mdi mdi-upload">
                                                    </span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <br>
                                                <div class="btn-group btn-group-crop w-100">
                                                    <button type="button" class="btn btn-primary btn-lg w-100" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Cắt">Cắt
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="getCroppedCanvasTitle">Ảnh đã cắt</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center"></div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                                                                <a class="btn btn-outline-info" id="download" href="javascript:void(0);" download="cropped.jpg">Tải xuống</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!--end row-->
                        {{-- <div class="row image-crop-actions">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div style="text-align: end;" class="col-lg-9 img-crop-preview-btns docs-buttons">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-sm" data-method="setDragMode" data-option="move" title="Move">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="">
                                                    <span class="mdi mdi-cursor-move"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success" data-method="setDragMode" data-option="crop" title="Crop">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="">
                                                    <span class="mdi mdi-crop"></span>
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success" data-method="zoom" data-option="0.1" title="Zoom In">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Zoom In">
                                                    <span class="mdi mdi-magnify-plus-outline"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                                    <span class="mdi mdi-magnify-minus-outline" data-toggle="tooltip" data-animation="false" title="Zoom Out">
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-sm" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Dịch trái">
                                                    <span class="mdi mdi-arrow-left"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-sm" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Dịch phải">
                                                    <span class="mdi mdi-arrow-right"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-sm" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Dịch lên">
                                                    <span class="mdi mdi-arrow-up"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-sm" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                                    <span class="mdi mdi-arrow-down" data-toggle="tooltip" data-animation="false" title="Dịch xuống">
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-sm" data-method="rotate" data-option="-45" title="Rotate Left">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Xoay trái">
                                                        Xoay trái
                                                    <span class="mdi mdi-rotate-left"></span>
                                                    </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-sm" data-method="rotate" data-option="45" title="Rotate Right">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Xoay phải">
                                                        Xoay phải
                                                    <span class="mdi mdi-rotate-right"></span>
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-sm" data-method="scaleX" data-option="-1" title="Lật ngang">
                                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Lật ngang">
                                                            Lật ngang
                                                            <span class="mdi mdi-arrow-left-right"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-success btn-sm" data-method="scaleY" data-option="-1" title="Lật dọc">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Lật dọc">
                                                        Lật dọc
                                                    <span class="mdi mdi-arrow-up-down"></span>
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-sm" data-method="reset" title="Reset">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Reset">
                                                    Reset
                                                    <span class="mdi mdi-sync"></span>
                                                    </span>
                                                    </button>
                                                    <label class="btn btn-success mb-0 btn-upload btn-sm" for="inputImage" title="Upload image file">
                                                    <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Tải ảnh lên">
                                                    Upload
                                                    <span class="mdi mdi-upload">
                                                    </span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <br>
                                                <div class="btn-group btn-group-crop">
                                                    <button type="button" class="btn btn-primary btn-lg" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Cắt">Cắt
                                                    </span>
                                                    </button>
                                                </div>
                                                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="getCroppedCanvasTitle">Ảnh đã cắt</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center"></div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                                                                <a class="btn btn-outline-info" id="download" href="javascript:void(0);" download="cropped.jpg">Tải xuống</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-lg-3 docs-toggles">
                                                <div class="btn-group btn-group-sm d-flex flex-nowrap" data-toggle="buttons">
                                                    <label class="btn btn-outline-success active">
                                                    <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 16 / 9">
                                                    16:9
                                                    </span>
                                                    </label>
                                                    <label class="btn btn-outline-success">
                                                    <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 4 / 3">
                                                    4:3
                                                    </span>
                                                    </label>
                                                    <label class="btn btn-outline-success">
                                                    <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 1 / 1">
                                                    1:1
                                                    </span>
                                                    </label>
                                                    <label class="btn btn-outline-success">
                                                    <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 2 / 3">
                                                    2:3
                                                    </span>
                                                    </label>
                                                    <label class="btn btn-outline-success">
                                                    <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: NaN">
                                                    Free
                                                    </span>
                                                    </label>
                                                </div>
                                                <div class="dropdown dropup docs-options">
                                                    <button type="button" class="btn btn-success btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                                                    Options <i class="mdi mdi-chevron-up"></i>
                                                    </button>
                                                    <ul class="dropdown-menu docs-drop-options" aria-labelledby="toggleOptions" role="menu">
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox0" type="checkbox" name="responsive" checked="">
                                                                <label for="checkbox0">
                                                                Responsive
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox1" type="checkbox" name="restore" checked="">
                                                                <label for="checkbox1">
                                                                Restore
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox2" type="checkbox" name="checkCrossOrigin" checked="">
                                                                <label for="checkbox2">
                                                                CheckCrossOrigin
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox3" type="checkbox" name="checkOrientation" checked="">
                                                                <label for="checkbox3">
                                                                CheckOrientation
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox4" type="checkbox" name="modal" checked="">
                                                                <label for="checkbox4">
                                                                Modal
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox5" type="checkbox" name="guides" checked="">
                                                                <label for="checkbox5">
                                                                Guides
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox6" type="checkbox" name="center" checked="">
                                                                <label for="checkbox6">
                                                                Center
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox7" type="checkbox" name="highlight" checked="">
                                                                <label for="checkbox7">
                                                                Highlight
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox8" type="checkbox" name="background" checked="">
                                                                <label for="checkbox8">
                                                                Background
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox9" type="checkbox" name="autoCrop" checked="">
                                                                <label for="checkbox9">
                                                                AutoCrop
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox10" type="checkbox" name="movable" checked="">
                                                                <label for="checkbox10">
                                                                Movable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox11" type="checkbox" name="rotatable" checked="">
                                                                <label for="checkbox11">
                                                                Rotatable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox12" type="checkbox" name="scalable" checked="">
                                                                <label for="checkbox12">
                                                                Scalable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox13" type="checkbox" name="zoomable" checked="">
                                                                <label for="checkbox13">
                                                                Zoomable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox14" type="checkbox" name="zoomOnTouch" checked="">
                                                                <label for="checkbox14">
                                                                ZoomOnTouch
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox15" type="checkbox" name="zoomOnWheel" checked="">
                                                                <label for="checkbox15">
                                                                ZoomOnWheel
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox16" type="checkbox" name="cropBoxMovable" checked="">
                                                                <label for="checkbox16">
                                                                CropBoxMovable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox17" type="checkbox" name="cropBoxResizable" checked="">
                                                                <label for="checkbox17">
                                                                CropBoxResizable
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <div class="checkbox">
                                                                <input id="checkbox18" type="checkbox" name="toggleDragModeOnDblclick" checked="">
                                                                <label for="checkbox18">
                                                                ToggleDragModeOnDblclick
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- end .docs-options -->
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div> --}}
                        <!--end row-->
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card bg-pink">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><span data-plugin="counterup">{{ $statistic->visits_count }}</span></h2>
                                                <p class="mb-0">Số người chuy cập</p>
                                            </div>
                                            <i class="ion-md-eye"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card bg-purple">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><span data-plugin="counterup">{{ $statistic->generating_number_count }}</span></h2>
                                                <p class="mb-0">Số lần tạo số Random</p>
                                            </div>
                                            <i class="ion-md-paper-plane"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card bg-info">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><span data-plugin="counterup">{{ $statistic->docs_count }}</span></h2>
                                                <p class="mb-0">Số lượng văn mẫu</p>
                                            </div>
                                            <i class="ion-ios-pricetag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card bg-primary">
                                    <div class="card-body widget-style-2">
                                        <div class="text-white media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0 text-white"><span data-plugin="counterup">{{ $statistic->messages_sent_count }}</span></h2>
                                                <p class="mb-0">Số lượng tin nhắn đã gửi</p>
                                            </div>
                                            <i class="mdi mdi-comment-multiple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end content -->
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="https://www.facebook.com/profile.php">Your 3k onichan</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-17 m-0 text-white">Đổi bộ mặt</h4>
            </div>
            <div class="slimscroll-menu">
                <div class="p-4">
                    <div class="alert alert-warning" role="alert">
                        <strong>Trước khi chọn giao diện cần</strong> uống nước cam
                    </div>
                    <div class="mb-2">
                        <img src="assets/images/flash.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                        <label class="custom-control-label" for="light-mode-switch">Chế độ flash</label>
                    </div>
                    <div class="mb-2">
                        <img src="assets/images/dark-bruh.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
                        <label class="custom-control-label" for="dark-mode-switch">Chế độ dảk</label>
                    </div>
                </div>
            </div>
            <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
        <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose them
        </a>
        <script>
            var my_id = '{{ $data->user_id }}';
            var theme = {{ $data->setting->theme }};
            var mtodolist = JSON.parse('<?php echo json_encode($data->todo); ?>');

            var uUUrl = '{{ route("data.user.up") }}';
            var nbAddUrl = '{{ route("nb.add") }}';
            var postDocUrl = '{{ route("data.post.po") }}';
            var upSetUrl = '{{ route("data.set.up") }}';
            var todoUrl = '{{ route("data.todo.up") }}';
            var sendMessage = '{{ route("message.send") }}';
        </script>
        <!-- Vendor js -->
        <script src="assets\js\vendor.min.js"></script>
        <script src="assets\libs\moment\moment.min.js"></script>
        <script src="assets\libs\jquery-scrollto\jquery.scrollTo.min.js"></script>
        <script src="assets\libs\sweetalert2\sweetalert2.min.js"></script>
        <!-- Pusher -->
        <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
        <!-- Chat app -->
        <script src="assets\js\pages\jquery.chat.js"></script>
        <!-- Init crop image js-->
        <script src="assets\libs\cropper\cropper.min.js"></script>
        <script src="assets\js\pages\form-imagecrop.init.js"></script>
        <!-- Todo app -->
        <script src="assets\js\pages\jquery.todo.js"></script>
        <!--Morris Chart-->
        <script src="assets\libs\morris-js\morris.min.js"></script>
        <script src="assets\libs\raphael\raphael.min.js"></script>
        <!-- Sparkline charts -->
        <script src="assets\libs\jquery-sparkline\jquery.sparkline.min.js"></script>
        <!-- App js -->
        <script src="assets\js\app.min.js"></script>
        <!-- Dashboard init JS -->
        <script src="assets\js\pages\dashboard.init.js"></script>
    </body>
</html>
