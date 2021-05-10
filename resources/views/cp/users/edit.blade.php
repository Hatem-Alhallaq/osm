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
                              action="{{route('users.update',['id'=>$user->id])}}"   method="post">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label>اسم المستخدم:</label>
                                <input type="text" name="name" value="@if($user->name){{$user->name}}@endif"   class="form-control" placeholder="اسم المستخدم">
                            </div>

                             <div class="form-group">
                                <label>الايميل:</label>
                                <input type="text" name="email" value="@if($user->email){{$user->email}}@endif"  class="form-control" placeholder="example@example.example ">
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


