<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-white">

    <div id="app">

        @include('layouts.navigation')

        <main class="p-5">
            <div class="grid grid-cols-6 gap-4">

                <!-- content  -->
                <div class="col-span-6 sm:col-span-6">
                    <div class="w-full mt-5 p-6 bg-gray-100 rounded shadow-md">
                        @yield('content')
                    </div>
                </div>

            </div>
        </main>

        @include('layouts.footer')

    </div>

    @yield('script')

</body>

</html>