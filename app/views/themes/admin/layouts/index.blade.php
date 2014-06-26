<!DOCTYPE html>
<html lang="en">
    <head>
        @include('themes.admin.partials.header')
    </head>
    <body>
        <div id="wrapper">

            {{-- START Sidebar --}}

                @include('themes.admin.partials.nav')

            {{-- END Sidebar --}}

            {{-- START page-wrapper --}}

            <div id="page-wrapper">
                @yield('content')
            </div>

            {{-- END page-wrapper --}}

        </div> {{-- END #wrapper  --}}
    @include('themes.admin.partials.footer')
    </body>
</html>