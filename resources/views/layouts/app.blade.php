<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    <body>

    <div class="page">
        @include('partials.header')

        {{ $slot }}

        @include('partials.footer')

    </div>

        @include('partials.scripts')
        @stack('modals')
        @livewireScripts
    </body>
</html>
