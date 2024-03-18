<!doctype html>
<html lang="en">

@include('Theam.partial.head')

<body>

    <!-- Start Header/Navigation -->
    @include('Theam.partial.nav')
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    @include('Theam.partial.hero')
    <!-- End Hero Section -->

    @yield('content')

    <!-- Start Footer Section -->
    @include('Theam.partial.footer')
    <!-- End Footer Section -->


    @include('Theam.partial.scripts')
</body>

</html>
