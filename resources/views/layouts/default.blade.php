<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
    </head>
    <body class="{{$view_name}}">
        @include('layouts.nav')
        <div class="page container-fluid">
            @yield('content')
        </div>
        @yield('map')
        @include('layouts.footer')

        <script type="text/javascript" src="{{ mix('/js/default.js') }}"></script>

        @yield('scripts')
    </body>

</html>
