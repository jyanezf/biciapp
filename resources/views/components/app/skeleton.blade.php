<!DOCTYPE html>

<html
    class="light-style layout-menu-fixed"
    data-assets-path="{{ asset('') }}"
    data-template="vertical-menu-template-free"
    data-theme="theme-default"
    dir="ltr"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>

<head>
    <meta charset="utf-8" />
    <meta
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        name="viewport"
    />

    <title>{{ $title . ' - ' . config('app.name') ?? config('app.name') }}</title>

    <meta
        content=""
        name="description"
    />

    {{-- Favicon  --}}
    <link
        href="{{ asset('app/img/favicon/favicon.ico') }}"
        rel="icon"
        type="image/x-icon"
    />

    {{-- Fonts  --}}
    <link
        href="https://fonts.googleapis.com"
        rel="preconnect"
    />
    <link
        crossorigin
        href="https://fonts.gstatic.com"
        rel="preconnect"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />
    {{-- Icons. Uncomment required icon fonts  --}}
    <link
        href="{{ asset('app/vendor/fonts/boxicons.css') }}"
        rel="stylesheet"
    />

    {{-- Core CSS  --}}
    <link
        class="template-customizer-core-css"
        href="{{ asset('app/vendor/css/core.css') }}"
        rel="stylesheet"
    />
    <link
        class="template-customizer-theme-css"
        href="{{ asset('app/vendor/css/theme-default.css') }}"
        rel="stylesheet"
    />
    <link
        href="{{ asset('app/css/demo.css') }}"
        rel="stylesheet"
    />

    {{-- Vendors CSS  --}}
    <link
        href="{{ asset('app/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"
        rel="stylesheet"
    />

    {{-- Page CSS  --}}
    @stack('page-css')

    {{-- Helpers  --}}
    <script src="{{ asset('app/vendor/js/helpers.js') }}"></script>

    {{-- Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section
    Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  --}}
    <script src="{{ asset('app/js/config.js') }}"></script>
</head>

<body>
    {{-- Content --}}

    {{ $slot }}

    {{-- Core JS --}}
    {{-- build:js assets/vendor/js/core.js --}}
    <script src="{{ asset('app/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('app/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('app/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('app/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('app/vendor/js/menu.js') }}"></script>
    {{-- endbuild --}}

    {{-- Vendors JS --}}
    @stack('vendors-js')

    {{-- Main JS --}}
    <script src="{{ asset('app/js/main.js') }}"></script>

    {{-- Page JS  --}}
    @stack('page-js')

    {{-- Place this tag in your head or just before your close body tag. --}}
    <script
        async
        defer
        src="https://buttons.github.io/buttons.js"
    ></script>
</body>

</html>
