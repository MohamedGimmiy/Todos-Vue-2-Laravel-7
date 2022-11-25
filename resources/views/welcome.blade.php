<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
        <div id="app">
            <app/>
        </div>
    </body>
    <script src="{{mix('js/app.js')}}"></script>
</html>
