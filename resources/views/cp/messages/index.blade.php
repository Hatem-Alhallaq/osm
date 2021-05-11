@extends('layouts.main')

@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">عرض المنشورات</span>
                    </h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الرئيسية</a>
                        <a href="#" class="breadcrumb-item">المنشورات</a>
                        <span class="breadcrumb-item active">عرض المنشورات</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Basic datatable -->
      <a  href="{{route('messages.create')}}" class="btn btn-primary">{{__('اضافة ')}}</a>
            <br>
            <br>

            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">عرض المنشورات</h5>
                </div>


                <table class="table datatable-basic">
                    <thead>
                    <tr>
                        <th>المرسل</th>
                        <th>العنوان</th>
                        <th> تاريخ النشر</th>
                        <th> الاعدادات </th>

                    </tr>
                    </thead>
                    <tbody>

                            @foreach($messages as $message)
                    <tr>
                        <td>{{$message->user->name}}</td>
                        <td>{{$message->title}}</td>
                        <td>{{$message->created_at}}</td>
                        <td class="text-center">
                            <a href="{{route('messages.show',['id'=>$message->id])}}" class="">{{__('التفاصيل ')}}</a>
                        </td>
                    </tr>
                            @endforeach

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
