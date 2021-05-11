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



                    <div class="col-lg-12">


                        <div id="accordion-default">
                         <?php   $i =1 ;?>
                            @foreach($faqs as $faq)
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title">
                                        <a data-toggle="collapse" class="text-default" href="#accordion-item-default1">{{$faq->question}}</a>
                                    </h6>
                                </div>

                                <div id="accordion-item-default{{$i}}" class="collapse " data-parent="#accordion-default">
                                    <div class="card-body">
                                        {{$faq->answer}}
                                    </div>
                                </div>
                            </div>
                              <?php  $i++ ; ?>
                            @endforeach
                        </div>
                        <!-- /basic accordion -->






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
