<!-- master.blade.php -->
<!--  VIEW -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Burney's Blog</title>
        <!--  external css-->
        <link rel="stylesheet" type="text/css" href="./css/landing.css">
        <!-- cdn for Disqus -->
        <script id="dsq-count-scr" src="//michaelburneysblog.disqus.com/count.js" async></script>   
        <!-- jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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