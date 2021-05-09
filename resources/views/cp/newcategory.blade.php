@extends('layouts.main')

@section('content')

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">اضافة تصنيف</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>


        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الرئيسية</a>
                    <a href="form_layout_vertical.html" class="breadcrumb-item">التصنيفات</a>
                    <span class="breadcrumb-item active">اضافة تصنيف</span>
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
                        <form action="#">
                            <div class="form-group">
                                <label>الاسم:</label>
                                <input type="text" class="form-control" placeholder="أدخل الاسم">
                            </div>

                            <div class="form-group">
                                <label>الحالة:</label>
                                <select class="form-control">
                                    <option>مفعل</option>
                                    <option>غير مفعل</option>
                                </select>
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


