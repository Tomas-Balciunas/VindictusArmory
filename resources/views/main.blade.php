<!DOCTYPE html>
<html lang="en">
    @include('_partials/head')
    <body>
        @yield('content')
    </body>
    <script src="{{URL::asset('js/script.js')}}"></script>
</html>