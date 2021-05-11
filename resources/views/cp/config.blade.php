@extends('layouts.main')

@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">قناة</span> التوصيات
                    </h4>
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


            <div class="card">


                <div class="card-body">
                    <div class="d-md-flex">
                        <ul class="nav nav-tabs nav-tabs-vertical flex-column mr-md-3 wmin-md-200 mb-md-0 border-bottom-0">
                            <li class="nav-item"><a href="#vertical-left-tab1" class="nav-link active"
                                                    data-toggle="tab"><i class="icon-menu7 mr-2"></i> الاعدادات
                                    العامة</a></li>
                            <li class="nav-item"><a href="#vertical-left-tab2" class="nav-link" data-toggle="tab"><i
                                            class="icon-mention mr-2"></i> اعدادات SEO</a></li>
                            <li class="nav-item"><a href="#vertical-left-tab3" class="nav-link" data-toggle="tab"><i
                                            class="icon-mention mr-2"></i>عن الموقع</a></li>
                            <li class="nav-item"><a href="#vertical-left-tab4" class="nav-link" data-toggle="tab"><i
                                            class="icon-mention mr-2"></i>روابط الاحالة</a></li>
                            <li class="nav-item"><a href="#vertical-left-tab5" class="nav-link" data-toggle="tab"><i
                                            class="icon-mention mr-2"></i>روابط التواصل الاجتماعي</a></li>
                            <li class="nav-item"><a href="#vertical-left-tab6" class="nav-link" data-toggle="tab"><i
                                            class="icon-mention mr-2"></i>المدير العام</a></li>
                            <li class="nav-item"><a href="#vertical-left-tab7" class="nav-link" data-toggle="tab"><i
                                            class="icon-mention mr-2"></i>بيانات التواصل</a></li>


                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="vertical-left-tab1">


                                <form action="#" data-select2-id="45">

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">اسم الموقع:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">التسجيل في الموقع:</label>
                                        <div class="col-lg-9">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="unstyled-radio-left" checked>
                                                    مفتوح
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="unstyled-radio-left" checked>
                                                    مغلق
                                                </label>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> شعار الموقع:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control h-auto">
                                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>




                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">حفظ الاعدادات <i
                                                    class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>

                            </div>

                            <div class="tab-pane fade" id="vertical-left-tab2">

                                <form action="#" data-select2-id="45">

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">وصف الموقع:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">الكلمات المفتاحية:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> أيقونة الموقع:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control h-auto">
                                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>




                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">حفظ الاعدادات <i
                                                    class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>

                            </div>

                            <div class="tab-pane fade" id="vertical-left-tab3">
                                <form action="#" data-select2-id="45">

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">العنوان:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">التفاصيل:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> صورة الخلفية:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control h-auto">
                                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> الصورة الأمامية:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control h-auto">
                                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>




                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">حفظ الاعدادات <i
                                                    class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>

                            </div>

                            <div class="tab-pane fade" id="vertical-left-tab4">
                                <form action="#" data-select2-id="45">

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">اسم الموقع:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">رابط الاحالة:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> شعار الموقع :</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control h-auto">
                                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>

 <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">اسم الموقع:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">رابط الاحالة:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> شعار الموقع :</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control h-auto">
                                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>

 <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">اسم الموقع:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">رابط الاحالة:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> شعار الموقع :</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control h-auto">
                                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>

 <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">اسم الموقع:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">رابط الاحالة:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> شعار الموقع :</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control h-auto">
                                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>





                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">حفظ الاعدادات <i
                                                    class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>

                            </div>


                            <div class="tab-pane fade" id="vertical-left-tab5">
                                <form action="#" data-select2-id="45">

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">فيسبوك:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">تويتر:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">انستجرام:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">يوتيوب:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">فيميو:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">واتساب:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">تيليجرام:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">سكايب:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>





                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">حفظ الاعدادات <i
                                                    class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>

                            </div>

                            <div class="tab-pane fade" id="vertical-left-tab6">
                                <form action="#" data-select2-id="45">

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">الاسم:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">المسمى الوطيفي:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">التفاصيل:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> صورة الخلفية:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control h-auto">
                                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> الصورة الشخصية:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control h-auto">
                                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">فيسبوك:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">تويتر:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">انستجرام:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">يوتيوب:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">فيميو:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">واتساب:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">تيليجرام:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">سكايب:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>


                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">حفظ الاعدادات <i
                                                    class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>


                            </div>


                            <div class="tab-pane fade" id="vertical-left-tab7">
                                <form action="#" data-select2-id="45">

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">العنوان:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">البريد الالكتروني:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">رقم الجوال:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">رقم الهاتف:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>
                                    </div>







                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">حفظ الاعدادات <i
                                                    class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>

                            </div>



                        </div>
                </div>
            </div>


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                            data-target="#navbar-footer">
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
