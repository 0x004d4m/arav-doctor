<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        @include('layout.head')
    </head>
    <body>
        <main class="main" id="top">
            @include('layout.loading')

            @include('layout.topbar')

            @include('layout.navbar')

            @yield('content')

            @include('layout.footer')
        </main>
        @include('layout.scripts')
    </body>
</html>
