<!DOCTYPE html>
<html lang="en">

<head>
    <title>AAA FLOWERS PORTAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{env('APP_ROOT')}}assets/images/logo.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{env('APP_ROOT')}}assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{env('APP_ROOT')}}assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{env('APP_ROOT')}}assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{env('APP_ROOT')}}assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{env('APP_ROOT')}}assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_ROOT')}}assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{env('APP_ROOT')}}assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{env('APP_ROOT')}}assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_ROOT')}}assets/css/custom.css">

    @livewireStyles
</head>

<body>
    @yield('content')

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{env('APP_ROOT')}}assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="{{env('APP_ROOT')}}assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="{{env('APP_ROOT')}}assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="{{env('APP_ROOT')}}assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="{{env('APP_ROOT')}}assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{env('APP_ROOT')}}assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="{{env('APP_ROOT')}}assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="{{env('APP_ROOT')}}assets/js/pcoded.min.js"></script>
    <script src="{{env('APP_ROOT')}}assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="{{env('APP_ROOT')}}assets/js/script.js "></script>
    
    @livewireScripts
</body>

</html>
