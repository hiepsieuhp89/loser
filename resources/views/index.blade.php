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
                  <h4 class="page-title">🐧🐧🐧🐧🐧</h4>
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
                                công việc chưa làm</h6>
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
                  <div id="cardCollpase1" class="collapse show">
                    <div class="card-box">
                      <div class="tabs-vertical-env">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="nav flex-column nav-pills tabs-vertical" role="tablist" aria-orientation="vertical">
                              @foreach($categorys as $category)
                              <a class="nav-link category-link mb-2" id="v-{{ $category->id }}-tab" data-toggle="pill" href="#v-{{ $category->id }}" role="tab" aria-controls="v-{{ $category->id }}" aria-selected="true">
                              {{ $category->name }}
                              </a>
                              @endforeach
                            </div>
                          </div>
                          <div class="col-md-9">
                            <div class="tab-content pt-4 pt-md-0">
                              @foreach($categorys as $category)
                              <div class="tab-pane fade show" id="v-{{ $category->id }}" role="tabpanel" aria-labelledby="v-{{ $category->id }}-tab">
                                <div id="accordion" class="mb-3">
                                    @foreach($category->documents as $document)
                                    @if ($document->status)
                                    <div class="card mb-0">
                                        <a href="#collapse{{ $document->id }}" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                            <div class="card-header" id="heading{{ $document->id }}">
                                                <h6 class="m-0">
                                                    {{ $document->title }}
                                                </h6>
                                            </div>
                                        </a>

                                        <div id="collapse{{ $document->id }}" class="collapse" aria-labelledby="heading{{ $document->id }}" data-parent="#accordion" style="">
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
            <!-- End row -->
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
