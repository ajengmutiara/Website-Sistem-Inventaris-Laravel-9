<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE-edge">
            <meta name="viewport" content="width-device-width, initial-scale-1.0">
            <title> SIS</tittle>
            
        </head>
<body>
        @yield('content')
        @include('layout.header')
        @include('layout.navbar')

        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</body>
</html>