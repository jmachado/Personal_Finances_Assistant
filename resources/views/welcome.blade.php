<!DOCTYPE doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <title>
                        {{ config('app.name', 'Projeto') }}
                    </title>
                    <!-- Fonts -->
                    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
                        <!-- Styles -->
                        <style>
                            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
                        </style>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/dashboard', Auth::user()) }}">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}">
                    Login
                </a>
                <a href="{{ route('register') }}">
                    Register
                </a>
                @endauth
            </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Finances Assistance
                </div>
                <table cellspacing="100">
                    <th>
                        <h3>
                            Total users registados
                        </h3>
                        <h1>
                            {{  DB::table('users')->count() }}
                        </h1>
                    </th>
                    <th>
                        <h3>
                            Numero de contas
                        </h3>
                        <h1>
                            {{  DB::table('accounts')->count() }}
                        </h1>
                    </th>
                    <th>
                        <h3>
                            Numero de movimentos
                        </h3>
                        <h1>
                            {{  DB::table('movements')->count() }}
                        </h1>
                    </th>
                </table>
            </div>
        </div>
    </body>
</html>
