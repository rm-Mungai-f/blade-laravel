<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <div>
            @include('nav')

            <div>
                <h2>This is the Home Page</h2>
            </div>
        </div>
    </body>
</html>
