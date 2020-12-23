<!DOCTYPE html>
<html lang="en">

@include('frontEnd.includes.head')

<body>

    <div id="wrapper">

        @include('frontEnd.includes.header')

        @yield('mainContent')

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('frontEnd')}}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('frontEnd')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('frontEnd')}}/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('frontEnd')}}/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('frontEnd')}}/vendor/morrisjs/morris.min.js"></script>
    <script src="{{ asset('frontEnd')}}/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('frontEnd')}}/dist/js/sb-admin-2.js"></script>

</body>
@include('frontEnd.includes.footer')

</html>
