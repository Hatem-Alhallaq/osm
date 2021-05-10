@extends('layouts.main')

@section('content')

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">اضافة منشور</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>


        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الرئيسية</a>
                    <a href="form_layout_vertical.html" class="breadcrumb-item">المنشورات</a>
                    <span class="breadcrumb-item active">اضافة منشور</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>


        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                <div class="card">


                    <div class="card-body">
                        <form enctype="multipart/form-data"
                              action="{{route('images.store')}}"   method="post">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label>العنوان:</label>
                                <input type="text" name="title" class="form-control" placeholder="أدخل العنوان">
                            </div>

                            <div class="form-group">
                                <label>مدة التقليب:</label>
                                <input type="number" class="form-control" min="0" name="dur_time" placeholder="أدخل مدة التقليب / ثانية">
                            </div>

                            <div class="form-group">
                                <label>الصورة:</label>
                                <input type="file" class="form-control" name="image_url" placeholder="أدخل العنوان">
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">حفظ <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /basic layout -->

            </div>

        </div>
        <!-- /vertical form options -->



    </div>
    <!-- /content area -->




</div>
<!-- /main content -->

@endsection


