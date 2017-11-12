<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LoL Counter Build</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="header">

        </div>

        <div id="contents">
            <div class="content">
                <div class="title m-b-md">
                    Laravel

                    <form method="POST" action="/search">
                        {{ csrf_field() }}

                        <input type="text" name="self">
                        <input type="text" name="role">
                        <input type="text" name="counter">

                        <input type="submit" name="submit">
                    </form>

                </div>

                <div class="parameters">
                    <p>{{ $champion_name }}</p>
                    <p>{{ $role }}</p>
                    <p>{{ $enemy_champion_name }}</p>
                </div>
            </div>
        </div>

        <div id="footer">
        </div>
    </body>
</html>
