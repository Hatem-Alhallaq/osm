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



                        @foreach($competition as $com)

                            <div class="card">
                                <div class="card-header header-elements-sm-inline">
                                    <h1 class="card-title"> {{$com->title}}</h1>
                                </div>
                                <div class="card-body">
                                    <div class="card-img-actions mb-3">
                                        <img class="card-img img-fluid" src="{{asset('/storage/posts/'.$com->image)}}" alt="">
                                    </div>

                                    <div class="card-img-actions mb-3">
                                        <p>{{$com->details}}</p>
                                    </div>
                                </div>


                            </div>

                        @endforeach




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
