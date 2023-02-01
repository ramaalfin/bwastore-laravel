<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title')</title>

    {{-- Style --}}
    @method('prepend-style')
    @include('includes.style')
    @method('addon-style')

</head>

<body>
    <!-- PAGE CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    @include('includes.footer')

    {{-- Script --}}
    @method('prepend-script')
    @include('includes.script')
    @method('addon-script')
</body>

</html>
