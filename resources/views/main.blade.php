<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>

    @include('sweetalert::alert')
    {{-- class="animsition" --}}

    <!-- Header -->
    @include('header')

    <!-- Cart -->
    @include('cart')

    @yield('content')
    <!-- Cart -->

    @include('footer')

    @include('sweetalert::alert')
</body>

</html>
