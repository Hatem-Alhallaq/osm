<!-- User menu -->

<div class="sidebar-user">
    <div class="card-body">
        <div class="media">
            <div class="mr-3">
                <a href="#"><img src="{{url('/')}}/global_assets/images/demo/users/face11.jpg" width="38" height="38"
                                 class="rounded-circle" alt=""></a>
            </div>

            <div class="media-body">
{{--                <div class="media-title font-weight-semibold">{{ auth()->user()->git remote add origin git@github.com:maldanaf/osama.git }}</div>--}}
                <!--								<div class="font-size-xs opacity-50">-->
                <!--									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA-->
                <!--								</div>-->
            </div>

            <div class="ml-3 align-self-center">
                <a href="#" class="text-white"><i class="icon-cog3"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- /user menu -->


<!-- Main navigation -->
<div class="card card-sidebar-mobile">
    <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Main -->
        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
                <i class="icon-home4"></i>
                <span>
									الرئيسية
                    <!--									<span class="d-block font-weight-normal opacity-50">No active orders</span>-->
								</span>
            </a>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>اضافة منشور</span></a>

            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                <li class="nav-item"><a href="#" class="nav-link ">منشور كتابي</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">فيديو</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">استطلاع رأي</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">صورة</a></li>

            </ul>
        </li>


        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>فيديوهات</span></a>

            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                <li class="nav-item"><a href="#" class="nav-link ">تصنيف 1</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">تصنيف 2</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">تصنيف 3</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">تصنيف 4</a></li>

            </ul>
        </li>

        <li class="nav-item">
            <a href="{{ route('chat') }}" class="nav-link">
                <i class="icon-list-unordered"></i>
                <span>قناة التوصية</span>
                <span class="badge bg-blue-400 align-self-center ml-auto">5</span>
            </a>
        </li>
        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-width"></i> <span>المستخدمين</span></a></li>


        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-width"></i> <span>الدعم الفني</span></a></li>
        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-width"></i> <span>أسئلة شائعة</span></a></li>
        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-width"></i> <span>المسابقات</span></a></li>

        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>اعدادات</span></a>

            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                <li class="nav-item"><a href="#" class="nav-link">تصنيفات الفيديوهات</a></li>
                <li class="nav-item"><a href="#" class="nav-link">اعدادات الموقع الخارجي</a></li>
                <li class="nav-item"><a href="#" class="nav-link">التحكم بالصور</a></li>
                <li class="nav-item"><a href="#" class="nav-link">تصنيف التحكم بالأسئلة الشائعة</a></li>
                <li class="nav-item"><a href="#" class="nav-link">اعدادات عامة</a></li>

            </ul>
        </li>




    </ul>
</div>
<!-- /main navigation -->
