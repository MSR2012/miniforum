<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    @yield('title')

    @include('layout.stylesheet')
    @yield('stylesheet')

</head>

<body class="animsition">
<div class="page-wrapper">

    @yield('content')
</div>

@include('layout.script')
@yield('script')
</body>

</html>
<!-- end document-->