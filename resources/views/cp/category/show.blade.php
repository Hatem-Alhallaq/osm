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
                        @foreach($posts as $post)
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header header-elements-sm-inline">
                                    <h6 class="card-title"> {{$post->title}}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="card-img-actions mb-3">
                                        <img class="card-img img-fluid" src="{{asset('/storage/posts/'.$post->image)}}" alt="">
                                        <div class="card-img-actions-overlay card-img">
                                            <a data-toggle="modal" data-target="#delete_model_{{$post->id}}" href="" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                                <i class="icon-link"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        @endforeach
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

    <?php $i=0 ?>
    @foreach($posts as $post)
        <div class="modal fade" id="delete_model_{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">

                            {{$post->title}}


                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$post->video_url}}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-round btn-default" data-dismiss="modal">
                            {{__('لا , الغاء!')}}
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <?php $i++ ?>
    @endforeach
@endsection
