<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alianca Empreendimentos</title>
        <script
                src="https://code.jquery.com/jquery-3.4.1.slim.js"
                integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
                crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

        <style>

            .p1 {
                visibility: hidden;
                opacity: 0;
                transition: visibility 0s, opacity 0.5s linear;
            }
            .p2 {
                visibility: visible;
                opacity: 1;
            }
        </style>


    </head>
    <body style="background-color: white" class="d-flex justify-content-center container">
    <div class="d-flex justify-content-center col-12">
    <img src="/img/logo.png"  width="90%" id="img" style="transition-duration: 5500ms ;" class=""><br>
    </div>
    <div style="position: absolute;
    align-content: space-around;
    top: 200px;}">
        <br><br><br><br>
        <p id="end" class="p1" >Endereço</p>

        <p id="num" class="p1" >Numero</p>


    </div>

    </body>

    <script>
        $(document).ready(function() {
            $("#img").width(400);
            setTimeout(end, 5000);
            setTimeout(num, 6000);







        });

        function end() {
            $("#end").addClass('p2')
        }


        function num() {
            $("#num").addClass('p2')
        }


    </script>
</html>
