<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MitraKU - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('public/css/simple-datatables/style.css')}}">

    <link rel="stylesheet" href="{{asset('public/css/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('public/images/logo.svg')}}" sastype="image/x-icon">
    <link rel="stylesheet" href="{{asset('public/frappe-gantt/dist/frappe-gantt.css')}}">

    <style>

        .nb {
            font-size: 12px;
            border: none;
        }

        .lupa {
            font-size : 15px;
            text-decoration: none;
        }

        .lupa:hover {
            text-decoration: underline;
        }

        @media only screen and (max-width: 2000px) {
            .login {
               padding : 10px;
            }

            .login-footer {
                padding: 30px;
            }
        }

        @media only screen and (max-width: 1400px) {
            .login {
               padding : 40px;
            }

            .login-footer {
                padding: 0px;
            }
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
    <script src="{{asset('public/frappe-gantt/dist/frappe-gantt.min.js')}}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);

        let table2 = document.querySelector('#table2');
        let dataTable2 = new simpleDatatables.DataTable(table2);
    </script>
    <script>
        var tasks = [
        {
            id: 'Task 1',
            name: 'Redesign website',
            start: '2016-12-28',
            end: '2016-12-31',
            progress: 20,
            dependencies: 'Task 2, Task 3',
            custom_class: 'bar-milestone' // optional
        },
        ]
        var gantt = new Gantt("#gantt", tasks);
    </script>
</body>

</html>