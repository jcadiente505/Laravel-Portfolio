<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <!-- CSS -->
        <link href="https://www.jacobcadiente.dev/css/app.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <div id="app">
            {{-- Vue Components rendered here --}}
            <navbar></navbar>
            {{-- <router-link :to="{ name: 'home' }">Home</router-link>
            <router-link :to="{ name: 'about' }">About</router-link> --}}
            <router-view></router-view>


        </div>
    </body>
    <script src="https://use.fontawesome.com/d906f2111c.js"></script>
    <script type="text/javascript" src="https://www.jacobcadiente.dev/js/app.js"></script>
</html>
