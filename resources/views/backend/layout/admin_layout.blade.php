<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>

    <base href="{{asset('')}}">

    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="adm/css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="adm/css/style.css" rel='stylesheet' type='text/css' />
    <link href="adm/css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="adm/css/font.css" type="text/css"/>
    <link href="adm/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href=adm/css/morris.css" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="adm/css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="adm/js/jquery2.0.3.min.js"></script>
    <script src="adm/js/raphael-min.js"></script>
    <script src="adm/js/morris.js"></script>
    <script type="text/javascript" src="adm/ckeditor/ckeditor.js"></script>
</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="{{ url('admin/dashboard')  }}" class="logo">
                Admin
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">

        </div>
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">

                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img style="width: 40px; height: 40px" src="{{URL::asset('adm/images/admin.jpg')}}" alt="">
                        <span class="username">{{ session('admin_name') }}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="{{ url('admin/logout') }}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="admin/dashboard">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:void(0)">
                            <i class="fa fa-newspaper-o"></i>
                            <span>Tin Tức</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ url('admin/list-news-category') }}">Danh mục tin tức
                                    <span class="pull-right" style="margin-right: 20px; color:#dddddd;">@if(session('news_category_qty')){{ session('news_category_qty') }}@endif</span>
                                </a></li>
                            <li><a href="{{ url('admin/list-news') }}">Liệt kê tin tức
                                    <span class="pull-right" style="margin-right: 20px; color:#dddddd;">@if(session('news_qty')){{ session('news_qty') }}@endif</span>
                                </a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="active" href="{{url('admin/list-product')}}">
                            <i class="fa fa-product-hunt"></i>
                            <span>Sản phẩm</span>
                            <span class="pull-right" style="margin-right: 20px; color:#dddddd;">@if(session('product_qty')){{ session('product_qty') }}@endif</span>
                        </a>
                    </li>

                    <li>
                        <a class="active" href="{{url('list-category')}}">
                            <i class="fa fa-book"></i>
                            <span>Danh mục</span>
                            <span class="pull-right" style="margin-right: 20px; color:#dddddd;">@if(session('category_qty')){{ session('category_qty') }} @endif</span>

                        </a>
                    </li>

                    <li>
                        <a class="active" href="{{url('admin/list-brand')}}">
                            <i class="fa fa-book"></i>
                            <span>Thương hiệu</span>
                            <span class="pull-right" style="margin-right: 20px; color:#dddddd;">@if(session('brand_qty')){{ session('brand_qty') }} @endif</span>

                        </a>
                    </li>

                    <li>
                        <a class="active" href="{{url('admin/admin')}}">
                            <i class="fa fa-user-plus"></i>
                            <span>Quản trị viên</span>
                            <span class="pull-right" style="margin-right: 20px; color:#dddddd;">@if(session('admin_qty')){{ session('admin_qty') }} @endif</span>

                        </a>
                    </li>

                    <li>
                        <a class="active" href="{{url('admin/list-customer')}}">
                            <i class="fa fa-user-md"></i>
                            <span>Quản lý khách hàng</span>
                            <span class="pull-right" style="margin-right: 20px; color:#dddddd;">@if(session('customer_qty')){{ session('customer_qty') }} @endif</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="{{url('admin/list-order')}}">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <span>Quản lý đơn hàng</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->


    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            @yield('main')
            @yield('add_category');


        </section>
    </section>
    <!--main content end-->
</section>
<script src="adm/js/bootstrap.js"></script>
<script src="adm/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="adm/js/scripts.js"></script>
<script src="adm/js/jquery.slimscroll.js"></script>
<script src="adm/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="adm/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="adm/js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function() {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function() {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function() {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth:true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},

            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
</script>
<!-- calendar -->
<script type="text/javascript" src="js/monthly.js"></script>
<script type="text/javascript">
    $(window).load( function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

        switch(window.location.protocol) {
            case 'http:':
            case 'https:':
                // running on a server, should be good.
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }

    });
</script>
<!-- //calendar -->
</body>
</html>
