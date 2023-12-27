<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard |  @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- Plugins css -->
        <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
        <script src="https://kit.fontawesome.com/b981429a8a.js" crossorigin="anonymous"></script>
        <!-- Bootstrap css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
        <!-- icons -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Head js -->
        <script src="{{asset('assets/js/head.js')}}"></script>

    </head>

    <!-- body start -->
    <body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
           @include('backend.components.header')
            <!-- end Topbar -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.components.sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                {{-- @yield('contents') --}}
                <!-- Footer Start -->
                {{-- @include('body.footer') --}}
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->

<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{asset('assets/js/vendor.min.js')}}"></script>

<!-- Plugins js-->
<script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{asset('assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

<!-- Dashboar 1 init js-->
<script src="{{asset('assets/js/pages/dashboard-1.init.js')}}"></script>

<!-- App js-->
<script src="{{asset('assets/js/app.min.js')}}"></script>

{{-- toaster js link  --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{Session::get('message')}}");
            break;

            case 'success':
                toastr.success("{{Session::get('message')}}");
                break;
                case 'warning':
                    toastr.warning("{{Session::get('message')}}");
                    break;
                    case 'error':
                        toastr.error("{{Session::get('message')}}");
                        break;
    }
    @endif
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Toggle seat selection on button click
        $('button.btn-seat').click(function () {
            var checkbox = $(this).prev('input[type="checkbox"]');
            checkbox.prop('checked', !checkbox.prop('checked'));
            updateSeatAppearance();
        });

        // Toggle seat selection on checkbox change
        $('input[type="checkbox"]').change(function () {
            updateSeatAppearance();
        });

        // Update the appearance of selected seats
        function updateSeatAppearance() {
            $('input[type="checkbox"]').each(function () {
                var button = $(this).next('button.btn-seat');
                if ($(this).prop('checked')) {
                    button.addClass('btn-selected');
                } else {
                    button.removeClass('btn-selected');
                }
            });
        }
    });
</script>

</body>
</html>