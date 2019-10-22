<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: black;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 50px;
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


        .menu{
            background-color: #6BB2EB;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
        }

        h1{
            color: white;
            margin: 0;
        }

        .btn{
            background-color: #1d68a7;
            color: white;
            border: #1d68a7 solid 1px;
            border-radius: 7px;
        }

        #hostname{
            border-radius: 5px;
            border: #1d68a7 solid 1px;
        }

        p{
            margin-top: 50px;
            font-weight: bold;
            color: #1d68a7;
        }

        ul{
            margin: 0;
        }

    </style>
</head>
<body>
<div class="menu">
    <h1>Painel de Administração</h1>
</div>

<div class="flex-center">
    <form action="/" method="post">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div style="color: red; text-align: center; margin-bottom: 20px">{{$error}}</div>
            @endforeach
        @endif
        <label for="hostname">Endereço do novo site:</label>
        <input name="hostname" id="hostname"/>
        <button type="submit" class="btn">CRIAR CONDOMÍNIO</button>
    </form>

    @isset ($hostnames)
        @if ($hostnames)
            <p>Condomínios já existentes:</p>
            <ul>
                @foreach ($hostnames as $hostname)
                    <li>{{ $hostname->fqdn }}</li>
                @endforeach
            </ul>
        @endif
    @endisset
</div>
</body>
</html>
