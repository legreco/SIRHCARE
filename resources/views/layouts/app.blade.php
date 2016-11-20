<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>SIRHCARE WEB</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    @include('includes.css.basicCss')
    @yield('css')
</head>
<body class="hold-transition skin-blue">
<div class="wrapper">

    <!-- Main Header -->
   @include('layouts.header')
    <!-- Left side column. contains the logo and sidebar -->
   @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            @yield('content-header')

        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Your Page Content Here -->
            @yield('content')

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
  @include('layouts.footer')
    @include('layouts.control_sidebar')
</div><!-- ./wrapper -->
<script>
    var userId="{{Auth::user()->id}}";
    var audio =new Audio('{{asset("sounds/notification.mp3")}}');
    var appUrl="{{env('APP_URL')}}";
</script>
@include('includes.js.basicJs')
@include('sweet::alert')
@yield('script')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->


<script>


    $('#scroll').slimscroll({
        height:'500px'

    });


    if (Boolean(sessionStorage.getItem("sidebar-toggle-collapsed"))) {
        $("body").removeClass('sidebar-collapse')
    }
    else
    {
        $("body").addClass('sidebar-collapse')
    }

    $('.sidebar-toggle').click(function() {
        event.preventDefault();
        if (Boolean(sessionStorage.getItem("sidebar-toggle-collapsed"))) {
            sessionStorage.setItem("sidebar-toggle-collapsed", "");
        } else {
            sessionStorage.setItem("sidebar-toggle-collapsed", "1");
        }
    });


</script>
</body>
</html>