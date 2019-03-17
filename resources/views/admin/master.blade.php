<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Job Zone </title>

    <!-- Bootstrap -->
    <link href="{{ asset('/admin') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/admin') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('/admin') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('/admin') }}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="{{ asset('/admin') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('/admin') }}/build/css/custom.min.css" rel="stylesheet">
    <link rel="icon" href="{{asset('admin/build')}}/images/icon.png" >
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            @include('admin.includes.menu')
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            @include('admin.includes.header')

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('body')
        </div>
        <!-- /page content -->

        <!-- footer content -->
    @include('admin.includes.footer')
    <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('/admin') }}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('/admin') }}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('/admin') }}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ asset('/admin') }}/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{ asset('/admin') }}/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- jQuery Sparklines -->
<script src="{{ asset('/admin') }}/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- Flot -->
<script src="{{ asset('/admin') }}/vendors/Flot/jquery.flot.js"></script>
<script src="{{ asset('/admin') }}/vendors/Flot/jquery.flot.pie.js"></script>
<script src="{{ asset('/admin') }}/vendors/Flot/jquery.flot.time.js"></script>
<script src="{{ asset('/admin') }}/vendors/Flot/jquery.flot.stack.js"></script>
<script src="{{ asset('/admin') }}/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="{{ asset('/admin') }}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="{{ asset('/admin') }}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{ asset('/admin') }}/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{ asset('/admin') }}/vendors/DateJS/build/date.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('/admin') }}/vendors/moment/min/moment.min.js"></script>
<script src="{{ asset('/admin') }}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('/admin') }}/build/js/custom.min.js"></script>





<!-- Datatables -->
<script src="{{ asset('/admin') }}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/admin') }}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<script>

    $(document).ready(function() {
        $('#dataTable').DataTable();
    } );
</script>
</body>
</html>