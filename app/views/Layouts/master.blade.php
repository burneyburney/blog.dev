<!-- master.blade.php -->
<!--  VIEW -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>title</title>
        <!--  foundation cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.css">
        <!--  external css-->
        <link rel="stylesheet" type="text/css" href="/css/myStyle.css">
        @yield('top-script')
    </head>
    <body>
        @if (Session::has('successMessage'))
            <div data-alert class="alert-box">
                {{{ Session::get('successMessage')}}}
                <a href="#" class="close">&times;</a>
            </div>
        @endif
        <main class="container">
            @yield('content')
        </main>
        @yield('bottom-script')
    </body>
</html>
