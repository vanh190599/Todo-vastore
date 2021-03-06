<!DOCTYPE html>
<head>
    <title>Admin - home</title>
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="adm/css/bootstrap.min.css" >
    <link href="adm/css/style.css" rel='stylesheet' type='text/css' />
    <link href="adm/css/style-responsive.css" rel="stylesheet"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="adm/css/font.css" type="text/css"/>
    <link href="adm/css/font-awesome.css" rel="stylesheet">
    <script src="adm/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Sign In Now</h2>
        <form action="{{ route('admin.login') }}" method="post">
            @csrf
            <input type="text" class="ggg" value="{{ old('admin_email') }}" name="admin_email" placeholder="E-MAIL">
            @error('admin_email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <input type="password" class="ggg" name="admin_password" value="{{ old('admin_password') }}" placeholder="PASSWORD">
            @error('admin_password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="text-danger">
                @if(!empty(session('message'))) {{ session('message') }} @endif
            </div>

            <div class="clearfix"></div>

            <input type="submit" value="Sign In" name="login">
        </form>
    </div>
</div>
<script src="adm/js/bootstrap.js"></script>
<script src="adm/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="adm/js/scripts.js"></script>
<script src="adm/js/jquery.slimscroll.js"></script>
<script src="adm/js/jquery.nicescroll.js"></script>
<script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script>
<script src="adm/js/jquery.scrollTo.js"></script>
</body>
</html>
