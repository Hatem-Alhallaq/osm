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
            <div class="card">
                <div class="col-lg-12">
                    <form enctype="multipart/form-data"
                          action="{{route('categories.store')}}"   method="post">
                        {{csrf_field()}}

                        <div class="row ">
                            <div class="form-group col-lg-12">
                                <label>الاسم :</label>
                                <input type="text" name="name" class="form-control" placeholder="أدخل الاسم ">
                                <button type="submit" class="btn btn-primary">اضافة <i class="icon-paperplane ml-2"></i></button>
                            </div>


                        </div>

                    </form>
                </div>

                <div class="card-header header-elements-inline">
                    <h5 class="card-title">عرض المنشورات</h5>
                </div>


                <table class="table datatable-basic">
                    <thead>
                    <tr>
                        <th>الاسم</th>
                        <th> تاريخ النشر</th>
                        <th> الاعدادات </th>

                    </tr>
                    </thead>
                    <tbody>

                            @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at}}</td>
                        <td class="text-center">
                            <button class="btn btn-danger" data-toggle="modal" data-target="#delete_model_{{$category->id}}">
                                <i class="fa fa-trash-o">حذف</i>
                            </button>
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
    <?php $i=0 ?>
    @foreach($categories as $category)
        <div class="modal fade" id="delete_model_{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">

                                {{$category->name}}


                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <h1>
                            <i class="fa fa-exclamation"></i>
                        </h1>
                        <h2>{{__('هل انت متاكد ؟')}}</h2>
                        <p>{{__('لن تكون قادر على استرجاع المنشور ')}}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-round btn-default" data-dismiss="modal">
                            {{__('لا , الغاء!')}}
                        </button>

                        <a href="{{route('categories.delete',['id'=>$category->id])}}" class="btn btn-round btn-danger">{{__('نعم ')}}</a>


                    </div>
                </div>
            </div>
        </div>
        <?php $i++ ?>
    @endforeach
@endsection
