<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Ecommerce Project</title>
    @include('partials.styles')
</head>
<body>

    <div class="wrapper">

        @include('partials.nav')
        @yield('content')
        @include('partials.footer')

    </div>

    @include('partials.script')
</body>
</html>
