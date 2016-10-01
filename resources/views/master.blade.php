<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title>VCCLOUD DOMAIN NAME MANAGEMENT</title>
    <meta name="keywords" content="vccloud"/>
    <meta name="description" content="vccloud">
    <meta name="author" content="Nguyen Xuan Dieu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- -------------- Icomoon -------------- -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/fonts/icomoon/icomoon.css') !!}">

    <!-- -------------- FullCalendar -------------- -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/js/plugins/fullcalendar/fullcalendar.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/js/plugins/magnific/magnific-popup.css') !!}">

    <!-- -------------- Plugins -------------- -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/js/plugins/c3charts/c3.min.css') !!}">

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/skin/default_skin/css/theme.css') !!}">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/allcp/forms/css/forms.css') !!}">

    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="{!! asset('assets/img/favicon.ico') !!}">

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js') !!}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js') !!}"></script>
    <![endif]-->

</head>

<body class="dashboard-page">

<!-- -------------- Body Wrap  -------------- -->
<div id="main">

    <!-- -------------- Header  -------------- -->
    <header class="navbar navbar-fixed-top bg-dark">
        <div class="navbar-logo-wrapper">
            <a class="navbar-logo-text" href="dashboard1.html">
                <b>VCCLOUD</b>
            </a>
            <span id="sidebar_left_toggle" class="ad ad-lines"></span>
        </div>

         <ul class="nav navbar-nav navbar-right">

           <li class="dropdown dropdown-fuse">
                <a href="#" class="dropdown-toggle fw600" data-toggle="dropdown">
                    <span class="hidden-xs"><name>Nguyễn Xuân Diệu</name> </span>
                    <span class="fa fa-caret-down hidden-xs mr15"></span>
                    <img src="{!! asset('assets/img/avatars/profile_avatar.jpg') !!}" alt="avatar" class="mw55">
                </a>
                <ul class="dropdown-menu list-group keep-dropdown w250" role="menu">


                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-cogs"></span> Settings </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="{!!url('logout')!!}" class="btn btn-primary btn-sm btn-bordered">
                            <span class="fa fa-power-off pr5"></span> Logout </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- -------------- /Header  -------------- -->

    <!-- -------------- Sidebar  -------------- -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- -------------- Sidebar Left Wrapper  -------------- -->
        <div class="sidebar-left-content nano-content">



            <!-- -------------- Sidebar Menu  -------------- -->
            <ul class="nav sidebar-menu">
                <li class="sidebar-label pt30">Menu</li>

                <li>
                    <a href="#">
                        <span class="fa fa-dashboard"></span>
                        <span class="sidebar-title">Tìm kiếm</span>

                    </a>

                </li>

                  <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-cogs"></span>
                        <span class="sidebar-title">Danh Sách Tên Miền</span>
                     </a>

                </li>
                <li>
                    <a href="email-layouts.html">
                        <span class="fa fa-envelope-o"></span>
                        <span class="sidebar-title">Thêm Tên Miền</span>
                    </a>
                </li>


            <!-- -------------- /Sidebar Menu  -------------- -->

            <!-- -------------- Sidebar Hide Button -------------- -->
            <div class="sidebar-toggler">
                <a href="#">
                    <span class="fa fa-arrow-circle-o-left"></span>
                </a>
            </div>
            <!-- -------------- /Sidebar Hide Button -------------- -->

        </div>
        <!-- -------------- /Sidebar Left Wrapper  -------------- -->

    </aside>
    <!-- -------------- /Sidebar -------------- -->

    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper">


        <!-- -------------- Topbar -------------- -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="#">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>

                    <li class="breadcrumb-link">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">@yield('head')</li>
                </ol>
            </div>

        </header>
        <!-- -------------- /Topbar -------------- -->

        <!-- -------------- Content -------------- -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- -------------- Column Center -------------- -->
            <div class="chute chute-center">

              @yield('content')
            </div>


            </div>
            <!-- -------------- /Column Center -------------- -->



        </section>
        <!-- -------------- /Content -------------- -->

        <!-- -------------- Page Footer -------------- -->
        <footer id="content-footer" class="affix">
            <div class="row">
                <div class="col-md-6">
                    <span class="footer-legal">© 2016 All rights reserved. <a href="http://xuandieuit.com">Design by Xuan Dieu</a> </span>
                </div>
                <div class="col-md-6 text-right">
                    <span class="footer-meta"></span>
                    <a href="#content" class="footer-return-top">
                        <span class="fa fa-angle-up"></span>
                    </a>
                </div>
            </div>
        </footer>
        <!-- -------------- /Page Footer -------------- -->

    </section>
    <!-- -------------- /Main Wrapper -------------- -->


</div>
<!-- -------------- /Body Wrap  -------------- -->

<!-- -------------- Scripts -------------- -->

<!-- -------------- jQuery -------------- -->
<script src="{!! asset('assets/js/jquery/jquery-1.11.3.min.js') !!}"></script>
<script src="{!! asset('assets/js/jquery/jquery_ui/jquery-ui.min.js') !!}"></script>

<!-- -------------- HighCharts Plugin -------------- -->
<script src="{!! asset('assets/js/plugins/highcharts/highcharts.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/c3charts/d3.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/c3charts/c3.min.js') !!}"></script>

<!-- -------------- Simple Circles Plugin -------------- -->
<script src="{!! asset('assets/js/plugins/circles/circles.js') !!}"></script>

<!-- -------------- Maps JSs -------------- -->
<script src="{!! asset('assets/js/plugins/jvectormap/jquery.jvectormap.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js') !!}"></script>

<!-- -------------- FullCalendar Plugin -------------- -->
<script src="{!! asset('assets/js/plugins/fullcalendar/lib/moment.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/fullcalendar/fullcalendar.min.js') !!}"></script>

<!-- -------------- Date/Month - Pickers -------------- -->
<script src="{!! asset('assets/allcp/forms/js/jquery-ui-monthpicker.min.js') !!}"></script>
<script src="{!! asset('assets/allcp/forms/js/jquery-ui-datepicker.min.js') !!}"></script>

<!-- -------------- Magnific Popup Plugin -------------- -->
<script src="{!! asset('assets/js/plugins/magnific/jquery.magnific-popup.js') !!}"></script>

<!-- -------------- Theme Scripts -------------- -->
<script src="{!! asset('assets/js/utility/utility.js') !!}"></script>
<script src="{!! asset('assets/js/demo/demo.js') !!}"></script>
<script src="{!! asset('assets/js/main.js') !!}"></script>

<!-- -------------- Widget JS -------------- -->
<script src="{!! asset('assets/js/demo/widgets.js') !!}"></script>
<script src="{!! asset('assets/js/demo/widgets_sidebar.js') !!}"></script>
<script src="{!! asset('assets/js/pages/dashboard1.js') !!}"></script>
<!-- -------------- /Scripts -------------- -->

</body>

</html>
