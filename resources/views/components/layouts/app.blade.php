<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @vite('resources/css/app.css')
    @livewireStyles
    @livewireScripts
</head>

<body class="antialiased">
    {{ $slot }}


    <script>
        document.documentElement.classList.add("dark");

        var themeToggleDark = document.getElementById("themeToggleDark");
        var themeToggleLight = document.getElementById("themeToggleLight");

        themeToggleLight.addEventListener("click", function() {
            if (localStorage.getItem("color-theme")) {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("color-theme", "light");
            } else {
                if (document.documentElement.classList.contains("dark")) {
                    document.documentElement.classList.remove("dark");
                    localStorage.setItem("color-theme", "light");
                }
            }
        });

        themeToggleDark.addEventListener("click", function() {
            if (localStorage.getItem("color-theme")) {
                document.documentElement.classList.add("dark");
                localStorage.setItem("color-theme", "dark");
            } else {
                document.documentElement.classList.add("dark");
                localStorage.setItem("color-theme", "dark");
            }
        });
    </script>
    @vite('resources/js/app.js')
</body>

</html>
