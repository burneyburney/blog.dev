<!-- master.blade.php -->
<!--  VIEW -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Burney's Blog</title>
        <!--  external css-->
        <link rel="stylesheet" type="text/css" href="./css/landing.css">
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