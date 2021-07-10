<!DOCTYPE html>
<html class="h-100" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name') }}</title>

        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    </head>
    <body class="d-flex flex-column justify-content-between h-100 pt-5">
        
        <x-nav-bar/>

        <x-main-container>

            @yield('content')

        </x-main-container>

        <x-footer/>

        <script src="{{ secure_asset('js/app.js') }}"></script>
    </body>
</html>