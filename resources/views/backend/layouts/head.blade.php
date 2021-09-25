<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api_token" content="{{\Auth::user() ? \Auth::user()->api_token : '' }}">
    <title>Nam Khánh Gara</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('assets2/css/custom.css') }}" rel="stylesheet"/>
    <!-- Fonts -->
     <script src="{{ asset('assets/js/ajax-jquery.3.6.0.js') }}"></script> 
    <link rel="icon" href=" {{ asset('assets/images/logo-ouransoft.png') }}" type="image/x-icon">

    <link href=" {{ asset('assets/css/pace.min.css') }}" rel="stylesheet"/>
    <script src=" {{ asset('assets/js/pace.min.js') }}"></script>
    <!--favicon-->
    <!-- Vector CSS -->
    <!-- simplebar CSS-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{ asset('assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>

    <link href="{{ asset('assets/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel='stylesheet'/>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel='stylesheet' />

    <link rel="stylesheet prefetch" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <!-- DataTables CSS -->
    <script src="{{asset('assets/js/jquery3.5.1.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/dataTable.css') }}">
    <script src="{{asset('assets/js/dataTables.min.js')}}"></script>
</head>