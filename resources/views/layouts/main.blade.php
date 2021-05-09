<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    @include('layouts.header')
    @stack('css')

</head>

<body>

@include('layouts.nav')
<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-right8"></i>
            </a>
            Navigation
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

        @include('layouts.menu')




        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->

@yield('content')



</div>
<!-- /page content -->

</body>
</html>
