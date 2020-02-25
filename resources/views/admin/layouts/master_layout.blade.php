<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
       @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{asset("css/material-dashboard.css")}}" rel="stylesheet" />
    <link href="{{asset("css/material.css")}}" rel="stylesheet" />
    @stack('css')
</head>

<body class="">
<div class="wrapper ">
   @include('admin.layouts.partials.sidebar');
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    @yield('navbar-brand')
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
               @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made by
                    <a href="" target="_blank">Atova Technology limited</a>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/popper.min.js")}}"></script>
<script src="{{asset("js/bootstrap-material-design.min.js")}}"></script>
<script src="{{asset("js/perfect-scrollbar.jquery.min.js")}}"></script>
<script src="{{asset("js/sweetalert2.js")}}"></script>
{{--<script src="{{asset("js/bootstrap-datetimepicker.min.js")}}"></script>--}}
{{--<script src="{{asset("js/jquery.dataTables.min.js")}}"></script>--}}
{{--<script src="{{asset("js/bootstrap-tagsinput.js")}}"></script>--}}
<script src="{{asset("js/material-dashboard.min.js")}}"></script>
<script src="{{asset("js/script.js")}}"></script>
@stack('js')
</body>

</html>
