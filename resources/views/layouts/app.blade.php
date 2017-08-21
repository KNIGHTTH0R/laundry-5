<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <style>
            table {
                margin: auto;
                border: 1px solid;
                border-collapse: collapse;
            }
            td {
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>
