<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @vite('resources/js/app.js')
</body>

</html>
