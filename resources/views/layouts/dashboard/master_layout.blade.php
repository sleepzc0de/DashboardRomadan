<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Biro Manajemen BMN dan Pengadaan</title>

    <!-- Global stylesheets -->
    <link href="{{ asset('webromadan/be/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webromadan/be/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webromadan/fe/css/ltr/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
    @yield('css')
    <link rel="icon" type="image/x-icon" href="https://oa.kemenkeu.go.id/favicon.ico">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('webromadan/be/demo/demo_configurator.js')}}"></script>
    <script src="{{ asset('webromadan/be/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    @yield('script_atas')
    <!-- Theme JS files -->
	<script src="{{asset('webromadan/be/js/vendor/media/glightbox.min.js')}}"></script>
    <script src="{{ asset('webromadan/fe/js/app.js')}}"></script>
    @yield('script_bawah')



    <!-- /theme JS files -->

</head>

<body>
    @include('layouts.dashboard.navbar')


    <!-- Page content -->
    <div class="page-content">

        @include('layouts.dashboard.sidebar')


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                {{-- @include('layouts.dashboard.page_header') --}}

                <!-- Content area -->
                <div class="content">
                    @yield('content')
                </div>
                <!-- /content area -->

                @include('layouts.dashboard.footer')

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->





    {{-- @include('layouts.dashboard.config') --}}


</body>

</html>