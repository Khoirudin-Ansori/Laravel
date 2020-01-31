<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>Universitas Brawijaya</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       <style>
            html, body {
                background-image: url("image.jpg");
                background-color: #000;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            /*.flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }*/
            .foto{
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

            .jdul {
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
            .tabel td{
                width: 150px;
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                width: 30%;
            }
            .pendidikan{
                margin-left: 400px;
                margin-top: -200px;
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                width: 30%;

            }
        </style>

        </style>
    </head>
    <body style="background-image:url('img/download.jpg'); background-size: cover;">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

             <div class="content">
                <div class="title m-b-md jdul">
                    Khoirudin Ansori
                </div>
                <div class="foto">
                    <img src="{{ ('img/pasfoto.jpg') }}" width="10%">
                </div>
                <div class="foto">
                    <table class="tabel" >
                       <tr>
                           <td colspan="3" align="center"> <p>Profil</p></td>
                           <td>|</td>
                           <td colspan="3" align="center"> <p>Pendidikan</p></td>
                       </tr>
                       <tr>
                           <td><p>Nama</p></td>
                           <td><p>:</p></td>
                           <td><p>Khoirudin Ansori</td>
                           <td><p>|</p></td>
                           <td><p>SD</p></td>
                           <td><p>:</p></td>
                           <td><p>SDN Pringo</p></td>
                       </tr>
                       <tr>
                           <td><p>Alamat</p></td>
                           <td><p>:</p></td>
                           <td><p>Bululawang</p></td>
                           <td><p>|</p></td>
                           <td><p>SMP</p></td>
                           <td><p>:</p></td>
                           <td><p>SMPN 1 Bululawang</p></td>
                       </tr>
                       <tr>
                           <td><p>Tempat, Tanggal Lahir</p></td>
                           <td><p>;</p></td>
                           <td><p>Malang, 03 Maret 1999</p></td>
                           <td><p>|</p></td>
                           <td><p>SMA</p></td>
                           <td><p>:</p></td>
                           <td><p>SMAN 2 Malang</p></td>
                           
                       </tr>
                    </table>
                </div>
            </div>
                
            </div>
        </div>
    </body>
</html>
