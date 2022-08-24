<!DOCTYPE html>
<html lang="en-US" dir="{{Session::get('direction')}}">
    <head>
        @include('layout.head')
    </head>
    <body>
        <main class="main" id="top">
            @include('layout.loading')
            @include('layout.topbar')
            @include('layout.navbar')
            @include('layout.partials.alert')
            @yield('content')
            @include('layout.footer')
        </main>
        @include('layout.scripts')
    </body>
</html>
