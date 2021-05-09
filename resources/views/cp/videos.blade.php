@extends('layouts.main')

@section('content')



    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">مكتبة</span>  الفيديو</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الرئيسية</a>
                        <span class="breadcrumb-item active">مكتبة الفيديو</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">


            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-img-actions m-1">
                            <img class="card-img img-fluid" src="{{url('/')}}/global_assets/images/demo/flat/1.png" alt="">
                            <div class="card-img-actions-overlay card-img">
                                <a href="{{url('/')}}/global_assets/images/demo/flat/1.png" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                                    <i class="icon-plus3"></i>
                                </a>

                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-img-actions m-1">
                            <img class="card-img img-fluid" src="{{url('/')}}/global_assets/images/demo/flat/3.png" alt="">
                            <div class="card-img-actions-overlay card-img">
                                <a href="{{url('/')}}/global_assets/images/demo/flat/3.png" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                                    <i class="icon-plus3"></i>
                                </a>

                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-img-actions m-1">
                            <img class="card-img img-fluid" src="{{url('/')}}/global_assets/images/demo/flat/2.png" alt="">
                            <div class="card-img-actions-overlay card-img">
                                <a href="{{url('/')}}/global_assets/images/demo/flat/2.png" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                                    <i class="icon-plus3"></i>
                                </a>

                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-img-actions m-1">
                            <img class="card-img img-fluid" src="global_assets/images/demo/flat/4.png" alt="">
                            <div class="card-img-actions-overlay card-img">
                                <a href="global_assets/images/demo/flat/4.png" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                                    <i class="icon-plus3"></i>
                                </a>

                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



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
