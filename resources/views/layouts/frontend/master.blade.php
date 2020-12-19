<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','خبرگزاری فارس')</title>
    @yield('head')

    <style>
    .social-icon{
       font-size: 31px !important;
        padding: 10px 10px !important;
        color: #fff !important;
    }
    .social-group{
        margin-bottom: 20% !important;
    }
    
    </style>


</head>
<body>

@include('layouts.frontend.header')
<div>
    @yield('content')

</div>

 @include('layouts.frontend.footer')
    @yield('scripts')
</body>

</html>