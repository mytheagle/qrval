<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QRcode Alianca</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148095722-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-148095722-1');
        </script>

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
            <div class="flex-center">
                <img style="" src="/img/logo.png" width="200" height="120" alt="logo" title="logo"><br><br>
            </div>
            <div class="col-md-12">
                <br>
                <p class="col-md-12 font-weight-bold" style="position:relative;"> Certificado <span style="color: black;font-family: 'calibri';">{{$certificado->numero}}</span> validado eletronicamente as {{\Carbon\Carbon::now('America/Maceio')->format('H:i:s')}} do dia {{\Carbon\Carbon::now('America/Maceio')->format('d/m/Y')}}
                para a empresa {{$coletas->items[0]['gerador']['nomeRazaoSocial']}} relativo aos descartes abaixo:
                </p>
            </div>

            <div class="col-md-12">
                <table class="col-md-12" >
                    <tr  style="border: 1px solid">
                        <th style="min-width: 100px;">Transportador</th>
                        <th>Data do descarte</th>
                        <th>Manifesto</th>
                        <th>Endereço</th>
                        <th>Quantidade</th>
                    </tr>
                    @foreach($coletas->items as $coleta)
                        @if($coleta != null)
                    <tr style="border-bottom: 1px solid">
                        <td>{{$coleta["transportador"]["nomeRazaoSocial"]}}</td>
                        <td>{{(new \Carbon\Carbon($coleta["dataEmissao"]))->format('d-m-Y')}}</td>
                        <td>{{$coleta["numeroTransportador"]}}</td>
                        <td>{{$coleta["obra"]["descricao"]}}</td>
                        <td>
                                <p>{{$coleta["itens"]["items"][0]["qtde"]+$coleta["itens"]["items"][1]["qtde"]}}m³</p>
                        </td>

                    </tr>
                        @endif
                    @endforeach
                </table>
            </div>




        </div>
    </body>
</html>
