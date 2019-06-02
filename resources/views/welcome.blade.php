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
        <div class="position-ref full-height">
            <div class="col-md-12">
                <p class="col-md-12 font-weight-bold"> Certificado x foi validado eletronicamente as {{\Carbon\Carbon::now()}}
                para a empresa x relativo aos descartes abaixo:</p>
            </div>

            <div class="col-md-12">
                <table class="col-md-12" >
                    <tr  style="border: 1px solid">
                        <th>Empresa</th>
                        <th>Data do descarte</th>
                        <th>Manifesto</th>
                        <th>Endereço</th>
                        <th>Quantidade</th>
                    </tr>
                    <tr>
                        <td>X</td>
                        <td>20/03/2019</td>
                        <td>5372</td>
                        <td>Rua fulano de tal</td>
                        <td>100m³</td>

                    </tr>
                </table>
            </div>




        </div>
    </body>
</html>
