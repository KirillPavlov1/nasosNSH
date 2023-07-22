@stack('css')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('../css/app.css') }}">
        <link rel="stylesheet" href="{{ url('../css/fonts.css') }}">
        <title>@yield('title-page')</title>
        <meta name="description" content="@yield('description')">
        <script src="../js/myScripts.js"></script>
        <link rel="icon" type="image/png" sizes="16x32" href="/images/favicon.png">
    <body>
        @include('includes.header')
        @include('layouts.applic')
        @yield('content')
        @include('includes.footer')
    </body>
</html>