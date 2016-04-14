<!-- master.blade.php -->
<!--  VIEW -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>title</title>
        <!--  foundation cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.css">
    </head>
    <body>
        @if (Session::has('successMessage'))
            <div class="alert alert-success"> {{{ Session::get('successMessage')}}} </div>
        @endif
        <main class="container">
            @yield('content')
        </main>

    </body>
</html>
