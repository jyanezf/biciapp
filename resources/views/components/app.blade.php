<x-app.skeleton>
    {{-- Page title --}}
    <x-slot:title>
        {{ $title ?? 'Page' }}
    </x-slot>

    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">
            {{--  Layout container --}}
            <div class="layout-page">
                {{-- Navbar  --}}
                <nav
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar"
                >
                    <a
                        class="app-brand-link"
                        href="{{ url('/') }}"
                    >
                        <x-app.logo />
                    </a>
                    <div
                        class="navbar-nav-right d-flex align-items-center"
                        id="navbar-collapse"
                    >

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            {{--  User  --}}
                            <x-app.dropdown-user />
                        </ul>
                    </div>
                </nav>

                {{--  Content wrapper  --}}
                <div class="content-wrapper">
                    {{-- Content --}}
                    <div class="container-xxl flex-grow-1 container-p-y">
                        {{ $slot }}
                    </div>

                    {{-- Footer --}}
                    <x-app.footer />

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
    </div>
</x-app.skeleton>
