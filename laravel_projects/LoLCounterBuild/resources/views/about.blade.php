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
            <h1>LoL Counter Build</h1>
        </div>

        <div id="contents">
            <div class="content">
                <div class="title m-b-md">
                    Laravel

                    <p>We can search the most hight win rate item build at web sites, but not in case of Garen vs Teemo.</p>

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
