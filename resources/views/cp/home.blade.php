@extends('layouts.main')

@section('content')
    <!-- Main content -->
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>


        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الرئيسية</a>
                    <span class="breadcrumb-item active">أخر المنشورات</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>


        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Timeline -->
        <div class="timeline timeline-left">
            <div class="timeline-container">

                <!-- Blog post -->
                <div class="timeline-row">
                    <div class="timeline-icon">
                        <img src="global_assets/images/demo/users/face12.jpg" alt="">
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            @foreach($posts as $post)
                            <div class="card">
                                <div class="card-header header-elements-sm-inline">
                                    <h6 class="card-title"> {{$post->title}}</h6>
                                    <div class="header-elements">
                                        <span><i class="icon-checkmark-circle mr-2 text-success"></i>{{$post->created_at}}</span>
                                        <div class="list-icons ml-3">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-arrow-down12"></i>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="card-img-actions mb-3">
                                        @if($post->image !="")
                                        <img class="card-img img-fluid" style="height: 350px;" src="{{asset('/storage/posts/'.$post->image)}}" alt="">
                                        @else
                                            <img class="card-img img-fluid" style="height: 350px;" src="{{asset('/storage/posts/T7ERczp62XCaFV1lxop0D2COe4qakFEi6Etxprm0.jpg')}}" alt="">
                                        @endif
                                            <div class="card-img-actions-overlay card-img">
                                            <a href="" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                                <i class="icon-link"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <h6 class="mb-3">
                                        <i class="icon-eye4 mr-2"></i>
                                        عدد المشاهدات : {{$post->views}}
                                    </h6>


                                </div>


                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /timeline -->

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

    <!-- /main content -->
@endsection
