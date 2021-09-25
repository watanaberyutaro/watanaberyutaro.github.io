<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@500;600;700&amp;family=Open+Sans:wght@600&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&amp;display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/script.js"></script>
    </head>
    <body>
    @yield('header')
    @yield('footer')
    </body>
</html>



