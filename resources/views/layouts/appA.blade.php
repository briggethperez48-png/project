<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 

        <link href="{{ asset('css/styleWeb.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/styleIndex.css') }}?v={{ time() }}">
        <link rel="stylesheet" href="{{ asset('css/styleInsti.css') }}?v={{ time() }}">
        <link rel="stylesheet" href="{{ asset('css/styleForm.css') }}?v={{ time() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
    </head>
    <body class="font-sans antialiased mx-auto my-auto text-center">
        <x-theHead></x-theHead>
        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <main>
                  @yield('content')
            </main>
        </div>

        <script src="{{ asset('js/Web.js') }}?v={{ time() }}"></script>
        <x-theFooter></x-theFooter>
    </body>
</html>
