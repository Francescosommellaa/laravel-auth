<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>boolpress</title>

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    @include('admin.partials.header')
    <div class="">
        @auth
            @include('admin.partials.aside')
        @endauth
        @yield('content')
    </div>
    @include('admin.partials.footer')

</body>

</html>
