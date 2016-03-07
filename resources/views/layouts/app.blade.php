<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
<?php 
/*
//ใช้ใน head.blade.php
@include('includes.head',['titlepage'=> (isset($titlepage) ? $titlepage : apps_name)])
(isset($titlepage) ? $titlepage : apps_name)
{{ isset($name) ? $name : 'Default' }}
{{ $name or 'Default' }}
{{ $titlepage or apps_name }}
*/
?>
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- Left Menu -->
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ url('/home') }}" class="site_title">
                            <i class="fa fa-book"></i> <span>{{ apps_name }}</span></a>
                    </div>
                    <div class="clearfix"></div>

                    @include('includes.leftmenu')

                </div>
            </div>
            <!-- /Left Menu -->

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    @include('includes.topmenu')
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')

                @include('includes.copylight')
            </div>
            <!-- /page content -->
        </div>
    </div>

    @include('includes.footer')
    <!-- /footer content -->
</body>

</html>