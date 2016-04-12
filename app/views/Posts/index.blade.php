<!-- index.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>index.blade.php</title>
    </head>
    <body>
        <h1> all posts </h1>
        <a href="{{{ action('PostsController@show', ['post' => 1]) }}}"> Read more </a>
    </body>
</html>
