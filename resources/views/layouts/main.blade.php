<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNISAG-X</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/app.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    @yield('css')
</head>

<body>
    <div id="app">
         @include('layouts.nav')
       <div id="main" class='layout-navbar'>
            @include('layouts.nav-horizontal')
            @yield('content')
                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2025 &copy; UNISAG-X</p>
                        </div>
                            <div class="float-end">
                                <p>CORMUDESI</p>
                            </div>
                    </div>
                </footer>
            </div>
       </div>
    </div>
    <script src="{{ asset('plugins/jquery.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('plugins/chosen/docsupport/prism.js') }}"></script>
    <script src="{{ asset('plugins/chosen/docsupport/init.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.2/dist/sweetalert2.all.min.js"></script>
    <script src="//cdn.datatables.net/2.3.2/js/dataTables.min.js"></script>
    @yield('js')
</body>

</html>