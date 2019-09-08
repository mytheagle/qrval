<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body>


        <div class="position-ref full-height col-lg-12">

            <div class="col-md-12">
                <div class="d-flex justify-content-center col-12">
                    <img src="/img/logo.png"  width="30%" id="img" style="transition-duration: 5500ms ;" class=""><br>
                </div>
                <br>
                <br>
                <p class="flex-center" style="font-size: xx-large">Infelizmente parece que nossos servidores estão desligados</p>
                <p class="flex-center" style="font-size: xx-large">Nosso horario de funcionamento é das 08:00 às 18:00 de Segundas a Sexta, exceto aos feriados.</p>

            </div>




        </div>
    </body>
</html>
