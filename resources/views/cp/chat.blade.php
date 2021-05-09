@extends('layouts.main')

@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">قناة</span> التوصيات</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الرئيسية</a>
                        <span class="breadcrumb-item active">قناة التوصيات</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Basic layout -->
            <div class="card">
                <div class="card-header header-elements-inline">

                </div>

                <div class="card-body">
                    <ul class="media-list media-chat media-chat-scrollable mb-3">
                        <li class="media content-divider justify-content-center text-muted mx-0">اليوم</li>

                        <li class="media">
                            <div class="mr-3">
                                <a href="{{url('/')}}/global_assets/images/demo/images/3.png">
                                    <img src="{{url('/')}}/global_assets/images/demo/users/face11.jpg" class="rounded-circle" width="40" height="40" alt="">
                                </a>
                            </div>

                            <div class="media-body">
                                <div class="media-chat-item">نص الرسالة هنا نص الرسالة هنا نص الرسالة هنا نص الرسالة هنا نص الرسالة هنا </div>
                                <div class="font-size-sm text-muted mt-2"> 9:54 ص <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
                            </div>
                        </li>





                    </ul>

                    <textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="أكتب رسالتك هنا ..."></textarea>

                    <div class="d-flex align-items-center">
                        <div class="list-icons list-icons-extended">
                            <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="أرسل صورة"><i class="icon-file-picture"></i></a>
                            <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="أرسل فيديو"><i class="icon-file-video"></i></a>
                            <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="أرسل ملف"><i class="icon-file-plus"></i></a>
                        </div>

                        <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> ارسال</button>
                    </div>
                </div>
            </div>
            <!-- /basic layout -->




        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2021. <a href="#">Asoom VIP</a>
					</span>


            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->


@endsection
