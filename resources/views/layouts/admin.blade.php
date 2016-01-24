<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Admin | Guillaume Lefrant</title>
    @include('partials.favicon')

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/backend.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/select2.min.css')}}"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/AdminLTE.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/skin-black.min.css') }}"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-black sidebar-mini <?php echo Auth::check() ? '' : 'sidebar-collapse'; ?>">
<div class="wrapper">
    @include('partials.admin-header')
            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('header')
                <!-- Main content -->
        <section class="content">
            @if (session('status'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('partials.admin-footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<script type="text/javascript" src="{{ asset('assets/javascript/backend.js') }}"></script>
</body>
</html>
