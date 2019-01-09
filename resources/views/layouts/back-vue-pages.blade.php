<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Certificate Issuing and Fulfilement System</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />





    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{ asset('css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet" /><!-- Custom Css Here -->
    <!--  Custom CSS    -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">



</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="./assets/img/full-screen-image-3.jpg">

       @yield('content')
    </div>

</div>


</body>

<!--   Core JS Files  -->

<!--   Core JS Files  -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>


<!--  Forms Validations Plugin -->
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('js/moment.min.js') }}"></script>


<!-- Vector Map plugin -->
<script src="{{ asset('js/jquery-jvectormap.js') }}"></script>


<!-- Wizard Plugin    -->
<script src="{{ asset('js/jquery.bootstrap.wizard.min.js') }}"></script>


<!--  Full Calendar Plugin    -->
<script src="{{ asset('js/fullcalendar.min.js') }}"></script>

<!-- Light Bootstrap Dashboard Core javascript and methods -->
<script src="{{ asset('js/light-bootstrap-dashboard.js') }}"></script>

<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('js/knockout-3.4.2.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>



<script type="text/javascript">
    $(document).ready(function(){

        demo.initDashboardPageCharts();
        demo.initVectorMap();

    });
</script>

<script type="text/javascript">
    $('.datetimepicker').datetimepicker({
        format: 'YYYY/MM/DD',
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        }
    });

</script>
@stack('scripts')

<!-- Include this after the sweet alert js file -->
@include('sweet::alert')

<script>
    $(function () {
        // flash auto hide
        $('#flash-msg .alert').not('.alert-danger, .alert-important').delay(6000).slideUp(500);
    })
</script>

</html>
