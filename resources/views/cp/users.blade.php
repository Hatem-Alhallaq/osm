@extends('layouts.main')

@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">عرض المستخدمين</span>
                    </h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الرئيسية</a>
                        <a href="#" class="breadcrumb-item">المستخدمين</a>
                        <span class="breadcrumb-item active">عرض المستخدمين</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Basic datatable -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">عرض المستخدمين</h5>


                </div>


                <table class="table datatable-basic">
                    <thead>
                    <tr>
                        <th>اسم المستخدم</th>
                        <th>البريد الالكتروني</th>
                        <th>أخر دخول</th>
                        <th>رقم المعرف ID</th>
                        <th>الحالة</th>
                        <th class="text-center">عمليات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>محمد</td>
                        <td><a href="#">a@a.a</a></td>
                        <td>14-04-2021</td>
                        <td>989998</td>
                        <td><span class="badge badge-success">مفعل</span></td>
                        <td class="text-center">
                                <a href="#" class=""><i class=""></i> تعديل</a> |
                                <a href="#" class=""><i class=""></i> حذف</a> |
                                <a href="#" class=""><i class=""></i> الغاء تفعيل</a>

                        </td>
                    </tr>

                    <tr>
                        <td>أسامة</td>
                        <td><a href="#">b@b.b</a></td>
                        <td>-</td>
                        <td>2231221</td>
                        <td><span class="badge badge-danger">غير مفعل</span></td>
                        <td class="text-center">
                            <a href="#" class=""><i class=""></i> تعديل</a> |
                            <a href="#" class=""><i class=""></i> حذف</a> |
                            <a href="#" class=""><i class=""></i>  تفعيل</a>

                        </td>
                    </tr>

                    <tr>
                        <td>عماد</td>
                        <td><a href="#">b@b3.b</a></td>
                        <td>-</td>
                        <td>3211232</td>
                        <td><span class="badge badge-dark">حساب محظور</span></td>
                        <td class="text-center">
                            <a href="#" class=""><i class=""></i> تعديل</a> |
                            <a href="#" class=""><i class=""></i> حذف</a> |
                            <a href="#" class=""><i class=""></i> الغاء حظر</a>

                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
            <!-- /basic datatable -->


            <!-- /scrollable datatable -->

        </div>
        <!-- /content area -->


    </div>
    <!-- /main content -->

@endsection