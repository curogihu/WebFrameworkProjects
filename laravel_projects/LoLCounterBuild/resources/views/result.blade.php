<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="contents">
                <div class="build">
                    <li><img src="https://placehold.jp/150x150.png" alt=""></li>
                    <li><img src="https://placehold.jp/150x150.png" alt=""></li>

                    <div>
                        <div id="win_item_build">
                            <img src="" alt="">
                            <p>item1</p>
                            <p>1:00</p>
                            <img src="" alt="">
                            <p>item2</p>
                            <p>2:00</p>
                            <img src="" alt="">
                            <p>item3</p>
                            <p>3:00</p>
                            <img src="" alt="">
                            <p>item4</p>
                            <p>4:00</p>
                        </div>

                        <div id="lose_item_build">
                            <img src="" alt="">
                            <p>item1</p>
                            <p></p>
                            <img src="" alt="">
                            <p></p>
                            <p></p>
                            <img src="" alt="">
                            <p></p>
                            <p></p>
                            <img src="" alt="">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
