<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Ecommerce Project</title>
    @include('frontend.partials.styles')
</head>
<body>

    <div class="wrapper">

        @include('frontend.partials.nav')
        @yield('content')
        @include('frontend.partials.footer')

    </div>

    @include('frontend.partials.script')
</body>
</html>
