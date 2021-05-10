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
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">عرض المنشورات</h5>
                </div>


                <table class="table datatable-basic">
                    <thead>
                    <tr>
                        <th>العنوان</th>
                        <th>المشاهدات</th>
                        <th> الكاتب</th>
                        <th> تاريخ النشر</th>
                        <th> الاعدادات </th>

                    </tr>
                    </thead>
                    <tbody>

                            @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->views}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->created_at}}</td>
                        <td class="text-center">
                            <a href="{{route('posts.edit',['id'=>$post->id])}}" class="">{{__('تعديل ')}}</a>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#delete_model_{{$post->id}}">
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

                        <a href="{{route('posts.delete',['id'=>$post->id])}}" class="btn btn-round btn-danger">{{__('نعم ')}}</a>


                    </div>
                </div>
            </div>
        </div>
        <?php $i++ ?>
    @endforeach
@endsection
