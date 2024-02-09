<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        @include('layouts.partial.styles')
    </head>
    <body>
        <script src="{{ asset("assets/static/js/initTheme.js")}}"></script>
        <div id="app">
            @include('layouts.partial.sidebar')

            <div id="main" class='layout-navbar navbar-fixed'>
                @include('layouts.partial.header')
                <div id="main-content" style="padding-top: 0;">
                    <div class="page-heading">
                        @yield('page-heading')
                    </div>
                    <div class="page-content">
                        @yield('content')
                    </div>

                    @include('layouts.partial.footer')
                </div>
            </div>
        </div>
        <!-- Scripts -->
        @include('layouts.partial.scripts')
    </body>
</html>
