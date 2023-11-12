<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS files -->
    <link href={{asset('/dist/css/tabler.min.css')}} rel="stylesheet"/>
    <link href={{asset('/dist/css/tabler-flags.min.css')}} rel="stylesheet"/>
    <link href={{asset('/dist/css/tabler-payments.min.css')}} rel="stylesheet"/>
{{--    <link href={{asset('/dist/css/tabler-vendors.min.css')}} rel="stylesheet"/>--}}
{{--    <link href={{asset('/dist/css/demo.min.css')}} rel="stylesheet"/>--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>
<body class="font-sans antialiased container">
{{--<x-banner/>--}}

<div class="min-h-screen bg-gray-100">


    <!-- Page Heading -->
{{--    @if (isset($header))--}}
{{--        <header class="bg-white shadow">--}}
{{--            <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">--}}
{{--                {{ $header }}--}}
{{--            </div>--}}
{{--        </header>--}}
{{--    @endif--}}

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

<!-- Libs JS -->
<script src={{asset('/dist/libs/apexcharts/dist/apexcharts.min.js')}} defer></script>
<script src={{asset('/dist/libs/jsvectormap/dist/js/jsvectormap.min.js')}} defer></script>
<script src={{asset('/dist/libs/jsvectormap/dist/maps/world.js')}} defer></script>
<script src={{asset('/dist/libs/jsvectormap/dist/maps/world-merc.js')}} defer></script>
<!-- Tabler Core -->
<script src={{asset('/dist/js/tabler.min.js')}} defer></script>
<script src={{asset('/dist/js/demo.min.js')}} defer></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-livewire-alert::scripts />

@livewireChartsScripts
</body>
</html>
