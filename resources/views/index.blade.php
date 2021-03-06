<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('') }}" />
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
        body {
            background-position: top;
            background-attachment: fixed;
            background-image: url(https://4.bp.blogspot.com/-hZmc1dvQO1U/Xfjs_11alMI/AAAAAAAABO4/9McmbxS4cKEiAVb6Sh-HD7NkQG2FJa8hgCLcBGAsYHQ/s1600/bg1.gif);
            font-family: Montserrat, sans-serif;
        }

        .content-page {
            margin: 0;
        }

        .footer {
            left: 0;
        }

        .c-black {
            color: black;
        }

        .conversation-list,
        .list-group {
            max-height: 330px !important;
        }

        .conversation-list .ctext-wrap p {
            text-align: left;
        }

        .count-down {
            border-radius: 14px;
            padding: 20px;
            background-size: cover;
            background-position: center;
        }

        .count-down__title , .count-down__time, .count-down__endTime{
            font-weight: bold;
            color: #ffffff;
            text-shadow: 0 0 10px black;
            text-align: center;
        }
        .count-down__endTime{
            text-transform: capitalize;
            font-size: 12px;
            font-style: italic;
            margin: 10px 0 30px 0;
        }
        .count-down__title {
            text-transform: uppercase;
            color: antiquewhite;
            font-size: 1.5em;
        }

    </style>
</head>

<body>
    {{-- Root --}}
    <div id="root"></div>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container">
                    <!-- start page title -->
                    <div class="row" id="countdown-section">
                        {{-- <div class="col-xl-4">
                            <div class="page-title-box">
                                <div class="count-down">
                                    <div class="count-down__title">?????m ng?????c T???t</div>
                                    <div endtime="2022-01-01" class="count-down__time"></div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">???????????????????? Y??u <a href="https://www.facebook.com/profile.php"
                                        style="color: red;text-decoration: revert;">c???u</a> nhi???u l???m ?? ????????????????????????????
                                </h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="breadcrumb-item"><a href="#">XXX</a></li>
                                        <li class="breadcrumb-item"><a href="#">Th?? m???c ??en</a></li>
                                        <li class="breadcrumb-item active">M???t hai ba b???n</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header py-3 bg-transparent">
                                    <div class="card-widgets">
                                        <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-toggle="collapse" href="#cardCollpase4" role="button"
                                            aria-expanded="false" aria-controls="cardCollpase4"><i
                                                class="mdi mdi-minus"></i></a>
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
                                                        done
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="" class="float-right btn btn-primary btn-sm"
                                                        id="btn-archive">L??m m???i </a>
                                                </div>
                                            </div>
                                            <ul class="list-group slimscroll todo-list" id="todo-list"
                                                style="height: 330px;">
                                            </ul>
                                            <div class="row">
                                                <div class="col-8 todo-inputbar">
                                                    <input type="text" id="todo-input-text" name="todo-input-text"
                                                        class="form-control" placeholder="Th??m c??ng vi???c">
                                                </div>
                                                <div class="col-4 todo-send">
                                                    <button class="btn-info btn-block btn" type="button"
                                                        id="todo-btn-submit">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-header py-3 bg-transparent">
                                    <div class="card-widgets">
                                        <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-toggle="collapse" href="#cardCollpase3" role="button"
                                            aria-expanded="false" aria-controls="cardCollpase3"><i
                                                class="mdi mdi-minus"></i></a>
                                    </div>
                                    <h5 class="header-title mb-0">Chat</h5>
                                </div>
                                <div id="cardCollpase3" class="collapse show">
                                    <div class="card-body">
                                        <div class="chat-conversation">
                                            <ul class="conversation-list slimscroll" style="min-height: 300px;">
                                                @foreach ($messages as $message)
                                                    <li class="clearfix @if ($message->from ==
                                                        $data->user_id) odd @endif">
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
                                                    <input type="text" class="form-control name-input" id="name-input"
                                                        placeholder="Nh???p t??n">
                                                </div>
                                                <div class="col-6 chat-inputbar">
                                                    <input type="text" class="form-control chat-input"
                                                        placeholder="Nh???p tin nh???n">
                                                </div>
                                                <div class="col-3 chat-send">
                                                    <button type="submit" class="btn btn-info btn-block">G???i</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Chat -->
                        </div>
                        <!-- end col-->
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-header py-3 bg-transparent">
                                    <div class="card-widgets">
                                        <a data-toggle="collapse" href="#cardCollpase5" role="button"
                                            aria-expanded="false" aria-controls="cardCollpase5"><i
                                                class="mdi mdi-minus"></i></a>
                                    </div>
                                    <h5 class="header-title mb-0"> T???o s??? random</h5>
                                </div>
                                <div id="cardCollpase5" class="collapse show">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group mb-3 col-sm-6">
                                                <input class="form-control" type="number" id="min-number" required=""
                                                    placeholder="Min" value="0">
                                            </div>
                                            <div class="form-group mb-3 col-sm-6">
                                                <input class="form-control" type="number" id="max-number" required=""
                                                    placeholder="Max" value="100">
                                            </div>
                                            <div class="form-group mb-3 col-sm-12">
                                                <textarea class="form-control" name="generated-number"
                                                    id="generated-number" cols="30" rows="3"
                                                    style="font-size: 40px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row text-center mt-4 mb-4">
                                            <div class="col-12">
                                                <button
                                                    class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                                    id="random-number-button">T???o ng???u nhi??n</button>
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
                        <div class="col-xl-9" id="vanmau-section">
                            <div class="card">
                                <div class="card-header py-3 bg-transparent">
                                    <div class="card-widgets">
                                        <a data-toggle="collapse" href="#cardCollpase1" role="button"
                                            aria-expanded="false" aria-controls="cardCollpase1"><i
                                                class="mdi mdi-minus"></i></a>
                                    </div>
                                    <h5 class="header-title mb-0">V??n m???u ph???n bi???n</h5>
                                </div>
                                <div id="cardCollpase1" class="collapse show" style="font-size: .8rem;">
                                    <div class="card-box">
                                        <div class="tabs-vertical-env">
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <input class="form-control" type="text" id="document-search"
                                                        required placeholder="Nh???p t??? kh??a t??m ki???m">
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="nav flex-column nav-pills tabs-vertical" role="tablist"
                                                        aria-orientation="vertical">
                                                        @foreach ($categorys as $category)
                                                            <a class="nav-link category-link mb-2"
                                                                id="v-{{ $category->id }}-tab" data-toggle="pill"
                                                                href="#v-{{ $category->id }}" role="tab"
                                                                aria-controls="v-{{ $category->id }}"
                                                                aria-selected="true">
                                                                {{ $category->name }}
                                                            </a>
                                                        @endforeach
                                                        <a class="nav-link category-link mb-2" id="v-all-tab"
                                                            data-toggle="pill" href="#v-all" role="tab"
                                                            aria-controls="v-all" aria-selected="true">T???t c???</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="tab-content pt-4 pt-md-0">
                                                        @foreach ($categorys as $category)
                                                            <div class="tab-pane fade show" id="v-{{ $category->id }}"
                                                                role="tabpanel"
                                                                aria-labelledby="v-{{ $category->id }}-tab">
                                                                <div id="accordion-{{ $category->id }}" class="mb-3">
                                                                    @foreach ($category->documents->sortBy('title', SORT_NATURAL) as $document)
                                                                        @if ($document->status)
                                                                            <div class="card mb-0">
                                                                                <a href="#collapse{{ $document->id }}"
                                                                                    class="text-dark collapsed"
                                                                                    data-toggle="collapse"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapseOne">
                                                                                    <div class="card-header document-title"
                                                                                        id="heading{{ $document->id }}">
                                                                                        <h6 class="m-0">
                                                                                            {{ $document->title }}
                                                                                        </h6>
                                                                                    </div>
                                                                                </a>
                                                                                <div id="collapse{{ $document->id }}"
                                                                                    class="collapse"
                                                                                    aria-labelledby="heading{{ $document->id }}"
                                                                                    data-parent="#accordion-{{ $category->id }}"
                                                                                    style="">
                                                                                    <div style="white-space: pre-line;" class="card-body text-dark"
                                                                                        id="content{{ $document->id }}">
                                                                                        {{ $document->content }}
                                                                                    </div>
                                                                                    <button
                                                                                        style="width: 100px; margin:auto;"
                                                                                        class="btn-info btn-block btn mb-4 copy-btn"
                                                                                        type="button"
                                                                                        target="#content{{ $document->id }}">Copy</button>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <div class="tab-pane fade show" id="v-all" role="tabpanel"
                                                            aria-labelledby="v-all-tab">
                                                            <div id="accordion-all" class="mb-3">
                                                                @foreach ($categorys as $category)
                                                                    @foreach ($category->documents->sortBy('title', SORT_NATURAL) as $document)
                                                                        @if ($document->status)
                                                                            <div class="card mb-0">
                                                                                <a href="#collapse{{ $document->id }}"
                                                                                    class="text-dark collapsed"
                                                                                    data-toggle="collapse"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapseOne">
                                                                                    <div class="card-header document-title"
                                                                                        id="heading{{ $document->id }}">
                                                                                        <h6 class="m-0">
                                                                                            {{ $document->title }}
                                                                                        </h6>
                                                                                    </div>
                                                                                </a>
                                                                                <div id="collapse{{ $document->id }}"
                                                                                    class="collapse"
                                                                                    aria-labelledby="heading{{ $document->id }}"
                                                                                    data-parent="#accordion-all" >
                                                                                    <div style="white-space: pre-line;" class="card-body text-dark document-content"
                                                                                        id="content{{ $document->id }}">
                                                                                        {{ $document->content }}
                                                                                    </div>
                                                                                    <button
                                                                                        style="width: 100px; margin:auto;"
                                                                                        class="btn-info btn-block btn mb-4 copy-btn"
                                                                                        type="button"
                                                                                        target="#content{{ $document->id }}">Copy</button>
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
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-header py-3 bg-transparent">
                                    <div class="card-widgets">
                                        <a data-toggle="collapse" href="#cardCollpase6" role="button"
                                            aria-expanded="false" aria-controls="cardCollpase6"><i
                                                class="mdi mdi-minus"></i></a>
                                    </div>
                                    <h5 class="header-title mb-0"> Cung c???p v??n m???u</h5>
                                </div>
                                <div id="cardCollpase6" class="collapse show">
                                    <div class="card-body">
                                        <div class="row">
                                            <label for="document-category" class="col-sm-12 col-form-label">Danh
                                                m???c</label>
                                            <div class="form-group mb-3 col-sm-12">
                                                <select class="form-control" id="document-category" required>
                                                    @foreach ($categorys as $category)
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <label for="document-title" class="col-sm-12 col-form-label">Ti??u ?????</label>
                                            <div class="form-group mb-3 col-sm-12">
                                                <input class="form-control" type="text" id="document-title" required
                                                    placeholder="Nh???p ti??u ?????">
                                            </div>
                                            <div class="form-group mb-3 col-sm-12">
                                                <textarea class="form-control" name="document-content"
                                                    id="document-content" cols="30" rows="8" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row text-center mt-4 mb-4">
                                            <div class="col-12">
                                                <button
                                                    class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                                    id="document-post">Cung c???p</button>
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header py-3 bg-transparent">
                                    <div class="card-widgets">
                                        <a data-toggle="collapse" href="#cardCollpase-image-crop" role="button"
                                            aria-expanded="false" aria-controls="cardCollpase-image-crop"><i
                                                class="mdi mdi-minus"></i></a>
                                    </div>
                                    <h5 class="header-title mb-0">C???t ???nh</h5>
                                </div>
                                <div id="cardCollpase-image-crop" class="collapse show" style="font-size: .8rem;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="img-container">
                                                    <img id="image" src="assets/images/users/avatar-1.jpg" alt="Picture"
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="image-crop-preview clearfix">
                                                    <div class="img-preview preview-lg"></div>
                                                </div>
                                                <div class="docs-data">
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text width-xs" for="dataX">T???a ?????
                                                                X</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataX"
                                                            placeholder="x">
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">px</span>
                                                        </span>
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text width-xs" for="dataY">T???a ?????
                                                                Y</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataY"
                                                            placeholder="y">
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">px</span>
                                                        </span>
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text width-xs"
                                                                for="dataWidth">Width</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataWidth"
                                                            placeholder="width">
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">px</span>
                                                        </span>
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text width-xs"
                                                                for="dataHeight">Height</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataHeight"
                                                            placeholder="height">
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">px</span>
                                                        </span>
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text width-xs"
                                                                for="dataRotate">Rotate</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataRotate"
                                                            placeholder="rotate">
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">deg</span>
                                                        </span>
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text width-xs"
                                                                for="dataScaleX">ScaleX</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataScaleX"
                                                            placeholder="scaleX">
                                                    </div>
                                                    <div class="input-group mt-2">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text width-xs"
                                                                for="dataScaleY">ScaleY</label>
                                                        </span>
                                                        <input type="text" class="form-control" id="dataScaleY"
                                                            placeholder="scaleY">
                                                    </div>
                                                </div>
                                                <!-- end .doc-data -->
                                            </div>
                                            <!-- end col -->
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 docs-toggles mb-3">
                                                                <div class="btn-group btn-group-sm d-flex flex-nowrap"
                                                                    data-toggle="buttons">
                                                                    <label class="btn btn-outline-success active">
                                                                        <input type="radio" class="sr-only"
                                                                            id="aspectRatio0" name="aspectRatio"
                                                                            value="1.7777777777777777">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false"
                                                                            title="aspectRatio: 16 / 9">
                                                                            16:9
                                                                        </span>
                                                                    </label>
                                                                    <label class="btn btn-outline-success">
                                                                        <input type="radio" class="sr-only"
                                                                            id="aspectRatio1" name="aspectRatio"
                                                                            value="1.3333333333333333">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false"
                                                                            title="aspectRatio: 4 / 3">
                                                                            4:3
                                                                        </span>
                                                                    </label>
                                                                    <label class="btn btn-outline-success">
                                                                        <input type="radio" class="sr-only"
                                                                            id="aspectRatio2" name="aspectRatio"
                                                                            value="1">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false"
                                                                            title="aspectRatio: 1 / 1">
                                                                            1:1
                                                                        </span>
                                                                    </label>
                                                                    <label class="btn btn-outline-success">
                                                                        <input type="radio" class="sr-only"
                                                                            id="aspectRatio3" name="aspectRatio"
                                                                            value="0.6666666666666666">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false"
                                                                            title="aspectRatio: 2 / 3">
                                                                            2:3
                                                                        </span>
                                                                    </label>
                                                                    <label class="btn btn-outline-success">
                                                                        <input type="radio" class="sr-only"
                                                                            id="aspectRatio4" name="aspectRatio"
                                                                            value="NaN">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false"
                                                                            title="aspectRatio: NaN">
                                                                            Free
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="dropdown dropup docs-options">
                                                                    <button type="button"
                                                                        class="btn btn-success btn-block dropdown-toggle"
                                                                        id="toggleOptions" data-toggle="dropdown"
                                                                        aria-expanded="true">
                                                                        Options <i class="mdi mdi-chevron-up"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu docs-drop-options"
                                                                        aria-labelledby="toggleOptions" role="menu">
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox0" type="checkbox"
                                                                                    name="responsive" checked="">
                                                                                <label for="checkbox0">
                                                                                    Responsive
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox1" type="checkbox"
                                                                                    name="restore" checked="">
                                                                                <label for="checkbox1">
                                                                                    Restore
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox2" type="checkbox"
                                                                                    name="checkCrossOrigin" checked="">
                                                                                <label for="checkbox2">
                                                                                    CheckCrossOrigin
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox3" type="checkbox"
                                                                                    name="checkOrientation" checked="">
                                                                                <label for="checkbox3">
                                                                                    CheckOrientation
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox4" type="checkbox"
                                                                                    name="modal" checked="">
                                                                                <label for="checkbox4">
                                                                                    Modal
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox5" type="checkbox"
                                                                                    name="guides" checked="">
                                                                                <label for="checkbox5">
                                                                                    Guides
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox6" type="checkbox"
                                                                                    name="center" checked="">
                                                                                <label for="checkbox6">
                                                                                    Center
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox7" type="checkbox"
                                                                                    name="highlight" checked="">
                                                                                <label for="checkbox7">
                                                                                    Highlight
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox8" type="checkbox"
                                                                                    name="background" checked="">
                                                                                <label for="checkbox8">
                                                                                    Background
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox9" type="checkbox"
                                                                                    name="autoCrop" checked="">
                                                                                <label for="checkbox9">
                                                                                    AutoCrop
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox10" type="checkbox"
                                                                                    name="movable" checked="">
                                                                                <label for="checkbox10">
                                                                                    Movable
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox11" type="checkbox"
                                                                                    name="rotatable" checked="">
                                                                                <label for="checkbox11">
                                                                                    Rotatable
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox12" type="checkbox"
                                                                                    name="scalable" checked="">
                                                                                <label for="checkbox12">
                                                                                    Scalable
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox13" type="checkbox"
                                                                                    name="zoomable" checked="">
                                                                                <label for="checkbox13">
                                                                                    Zoomable
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox14" type="checkbox"
                                                                                    name="zoomOnTouch" checked="">
                                                                                <label for="checkbox14">
                                                                                    ZoomOnTouch
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox15" type="checkbox"
                                                                                    name="zoomOnWheel" checked="">
                                                                                <label for="checkbox15">
                                                                                    ZoomOnWheel
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox16" type="checkbox"
                                                                                    name="cropBoxMovable" checked="">
                                                                                <label for="checkbox16">
                                                                                    CropBoxMovable
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox17" type="checkbox"
                                                                                    name="cropBoxResizable" checked="">
                                                                                <label for="checkbox17">
                                                                                    CropBoxResizable
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <div class="checkbox">
                                                                                <input id="checkbox18" type="checkbox"
                                                                                    name="toggleDragModeOnDblclick"
                                                                                    checked="">
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
                                                            <div style="text-align: end;"
                                                                class="col-sm-12 img-crop-preview-btns docs-buttons">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        data-method="setDragMode" data-option="move"
                                                                        title="Move">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="">
                                                                            <span class="mdi mdi-cursor-move"></span>
                                                                        </span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-success"
                                                                        data-method="setDragMode" data-option="crop"
                                                                        title="Crop">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="">
                                                                            <span class="mdi mdi-crop"></span>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-success"
                                                                        data-method="zoom" data-option="0.1"
                                                                        title="Zoom In">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="Zoom In">
                                                                            <span
                                                                                class="mdi mdi-magnify-plus-outline"></span>
                                                                        </span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-success"
                                                                        data-method="zoom" data-option="-0.1"
                                                                        title="Zoom Out">
                                                                        <span class="mdi mdi-magnify-minus-outline"
                                                                            data-toggle="tooltip" data-animation="false"
                                                                            title="Zoom Out">
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        data-method="move" data-option="-10"
                                                                        data-second-option="0" title="Move Left">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="D???ch tr??i">
                                                                            <span class="mdi mdi-arrow-left"></span>
                                                                        </span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        data-method="move" data-option="10"
                                                                        data-second-option="0" title="Move Right">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="D???ch ph???i">
                                                                            <span class="mdi mdi-arrow-right"></span>
                                                                        </span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        data-method="move" data-option="0"
                                                                        data-second-option="-10" title="Move Up">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="D???ch l??n">
                                                                            <span class="mdi mdi-arrow-up"></span>
                                                                        </span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        data-method="move" data-option="0"
                                                                        data-second-option="10" title="Move Down">
                                                                        <span class="mdi mdi-arrow-down"
                                                                            data-toggle="tooltip" data-animation="false"
                                                                            title="D???ch xu???ng">
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        data-method="rotate" data-option="-45"
                                                                        title="Rotate Left">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="Xoay tr??i">
                                                                            Xoay tr??i
                                                                            <span class="mdi mdi-rotate-left"></span>
                                                                        </span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        data-method="rotate" data-option="45"
                                                                        title="Rotate Right">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="Xoay ph???i">
                                                                            Xoay ph???i
                                                                            <span class="mdi mdi-rotate-right"></span>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        data-method="scaleX" data-option="-1"
                                                                        title="L???t ngang">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="L???t ngang">
                                                                            L???t ngang
                                                                            <span
                                                                                class="mdi mdi-arrow-left-right"></span>
                                                                        </span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        data-method="scaleY" data-option="-1"
                                                                        title="L???t d???c">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="L???t d???c">
                                                                            L???t d???c
                                                                            <span class="mdi mdi-arrow-up-down"></span>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        data-method="reset" title="Reset">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="Reset">
                                                                            Reset
                                                                            <span class="mdi mdi-sync"></span>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="btn-group w-100">
                                                                    <label class="btn btn-danger mb-0 btn-upload btn-lg"
                                                                        for="inputImage" title="Upload image file">
                                                                        <input type="file" class="sr-only"
                                                                            id="inputImage" name="file"
                                                                            accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="T???i ???nh l??n">
                                                                            Upload
                                                                            <span class="mdi mdi-upload">
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="btn-group btn-group-crop w-100">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-lg w-100"
                                                                        data-method="getCroppedCanvas"
                                                                        data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                                                                        <span class="docs-tooltip" data-toggle="tooltip"
                                                                            data-animation="false" title="C???t">C???t
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal fade docs-cropped"
                                                                    id="getCroppedCanvasModal" aria-hidden="true"
                                                                    aria-labelledby="getCroppedCanvasTitle"
                                                                    role="dialog" tabindex="-1">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="getCroppedCanvasTitle">???nh ????
                                                                                    c???t</h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body text-center"></div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-dismiss="modal">????ng</button>
                                                                                <a class="btn btn-outline-info"
                                                                                    id="download"
                                                                                    href="javascript:void(0);"
                                                                                    download="cropped.jpg">T???i xu???ng</a>
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
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col-->
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header py-3 bg-transparent">
                                    <div class="card-widgets">
                                        <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-toggle="collapse" href="#cardCollpaseYoutube" role="button"
                                            aria-expanded="false" aria-controls="cardCollpaseYoutube"><i
                                                class="mdi mdi-minus"></i></a>
                                    </div>
                                    <h5 class="header-title mb-0"> Nh???c</h5>
                                </div>
                                <div id="cardCollpaseYoutube" class="collapse show">
                                    <div class="card-body">
                                        <iframe width="100%" height = "400px" src="https://www.youtube.com/embed/videoseries?list=PLuV7shxQ6n45fF8CevxZvMoZ4-4Bc-vFT&autoplay=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card bg-pink">
                                <div class="card-body widget-style-2">
                                    <div class="text-white media">
                                        <div class="media-body align-self-center">
                                            <h2 class="my-0 text-white"><span
                                                    data-plugin="counterup">{{ $statistic->visits_count }}</span>
                                            </h2>
                                            <p class="mb-0">S??? ng?????i chuy c???p</p>
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
                                            <h2 class="my-0 text-white"><span
                                                    data-plugin="counterup">{{ $statistic->generating_number_count }}</span>
                                            </h2>
                                            <p class="mb-0">S??? l???n t???o s??? Random</p>
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
                                            <h2 class="my-0 text-white"><span
                                                    data-plugin="counterup">{{ $documentsCount }}</span></h2>
                                            <p class="mb-0">S??? l?????ng v??n m???u</p>
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
                                            <h2 class="my-0 text-white"><span
                                                    data-plugin="counterup">{{ $statistic->messages_sent_count }}</span>
                                            </h2>
                                            <p class="mb-0">S??? l?????ng tin nh???n ???? g???i</p>
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
            <h4 class="font-17 m-0 text-white">?????i b??? m???t</h4>
        </div>
        <div class="slimscroll-menu">
            <div class="p-4">
                <div class="alert alert-warning" role="alert">
                    <strong>Tr?????c khi ch???n giao di???n c???n</strong> u???ng n?????c cam
                </div>
                <div class="mb-2">
                    <img src="assets/images/flash.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                    <label class="custom-control-label" for="light-mode-switch">Ch??? ????? flash</label>
                </div>
                <div class="mb-2">
                    <img src="assets/images/dark-bruh.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                        data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
                    <label class="custom-control-label" for="dark-mode-switch">Ch??? ????? d???k</label>
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

        var uUUrl = '{{ route('data.user.up') }}';
        var nbAddUrl = '{{ route('nb.add') }}';
        var postDocUrl = '{{ route('data.post.po') }}';
        var upSetUrl = '{{ route('data.set.up') }}';
        var todoUrl = '{{ route('data.todo.up') }}';
        var countDownUrl = '{{ route('data.countdown.all') }}';
        var sendMessage = '{{ route('message.send') }}';
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
    <!-- Snowfall js -->
    <script src="assets\libs\jquery.snowfall.js"></script>
    {{-- React JS --}}
    <script crossorigin src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
    {{-- React DOM --}}
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
    {{-- Babel --}}
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <!-- App js -->
    <script src="assets\js\app.min.js"></script>
    <!-- Dashboard init JS -->
    <script src="assets\js\pages\dashboard.init.js"></script>
    <!-- React Init -->
    <script type="text/babel" src="assets\js\pages\react.js"></script>
    <script>
    $(document).snowfall({flakeCount : 50, maxSpeed : 5, maxSize : 7, round : true});
    </script>
</body>
</html>
???