<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MitraKU - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('public/css/simple-datatables/style.css')}}">

    <link rel="stylesheet" href="{{asset('public/css/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('public/images/logo.svg')}}" sastype="image/x-icon">

    <style>

        .nb {
            font-size: 12px;
            border: none;
        }
        
    </style>
</head>

<body>
    @yield('content')
    <!--<script src="{{asset('public/js/main.js')}}"></script>-->
    <script src="{{asset('public/css/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/css/simple-datatables/simple-datatables.js')}}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
</body>

</html>