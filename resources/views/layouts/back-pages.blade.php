<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Certificate Issuing and Fulfilement System</title>
        <!-- Bootstrap core CSS     -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{ asset('css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>
    <!--  Custom CSS    -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet" /><!-- Custom Css Here -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/print.css') }}" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange">

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

<!--  Date Time Picker Plugin is included in this js file -->
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>

<!--  Select Picker Plugin -->
<script src="{{ asset('js/bootstrap-selectpicker.js') }}"></script>

<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
<script src="{{ asset('js/bootstrap-switch-tags.min.js') }}"></script>

<!--  Charts Plugin
<script src="{{ asset('js/chartist.min.js') }}"></script>
-->
<!--  Notifications Plugin    -->
<script src="{{ asset('js/bootstrap-notify.js') }}"></script>

<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('js/sweetalert2.js') }}"></script>

<!-- Wizard Plugin    -->
<script src="{{ asset('js/jquery.bootstrap.wizard.min.js') }}"></script>

<!--  Datatable Plugin    -->

<!-- Light Bootstrap Dashboard Core javascript and methods -->
<script src="{{ asset('js/light-bootstrap-dashboard.js') }}"></script>

<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('js/knockout-3.4.2.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('js/signature_pad.min.js') }}"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>






<script type="text/javascript">
    // $(document).ready(function(){
    //
    //     demo.initDashboardPageCharts();
    //     demo.initVectorMap();
    //
    // });
</script>

<script type="text/javascript">
    // $('.datetimepicker').datetimepicker({
    //     format: 'YYYY/MM/DD',
    //     icons: {
    //         time: "fa fa-clock-o",
    //         date: "fa fa-calendar",
    //         up: "fa fa-chevron-up",
    //         down: "fa fa-chevron-down",
    //         previous: 'fa fa-chevron-left',
    //         next: 'fa fa-chevron-right',
    //         today: 'fa fa-screenshot',
    //         clear: 'fa fa-trash',
    //         close: 'fa fa-remove'
    //     }
    // });

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
