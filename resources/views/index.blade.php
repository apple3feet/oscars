<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fantasy Oscars Draft</title>

        <link rel="stylesheet" href="{{ URL::asset('css/oscars.css') }}">
    </head>

    <body>
        <img src="{{ URL::asset('images/trophy.jpg') }}" height=80 width=80 align="left">

        <h3>Appleyard Fantasy Oscars Draft</h3>

        <p>Films were selected from the <a href="films/{{ $year }}">{{ $year }} film list</a>
        prior to the nominations.</p>

        <form method="post">
            {{ csrf_field() }}
            <select name="year" onchange="this.form.submit();">
            <option>See results from different year...</option>
            @for ($y = LAST_YEAR; $y >= FIRST_YEAR; $y--)
                @if ($y != $year)
                    <option value="{{ $y }}">See results from {{ $y }}</option>
                @endif
            @endfor
        </select></form>

        <p clear="left">Bonus is five points for each final round
        pick which receives one or more nominations.</p>

        <table class="score" cellspacing="0">

        <tr>
        <th class="headleft">Player</th>
        <th class="headcenter">Total</th>
        <th class="headcenter">Bonus</th>
        <th class="headleft">Round picked: Film</th>
        <th class="headcenter">Noms</th>
        <th class="headcenter">Wins</th>
        <th class="headcenter">Points</th>
        </tr>

        @foreach ($pArray as $p) 
            <tr>

            <td class="bodycenter" rowspan="{{ $rounds }}">{{ $p["name"]  }}</td>
            <td class="bodycenter" rowspan="{{ $rounds }}">{{ $p["score"] }}</td>
            <td class="bodycenter" rowspan="{{ $rounds }}">{{ $p["bonus"] }}</td>

            @foreach ($p["picks"] as $pick)
                <td class="bodyleft">{{ $pick["round"] }}: <a href="http://www.imdb.com/title/tt{{ $films[$pick["film"]]["imdb"] }}/" target="_blank">{{ $films[$pick["film"]]["title"] }}</a></td>
                <td class="bodyleft">
                @foreach ($films[$pick["film"]]["nominations"] as $n)
                    @if ("Y" == $n["winner"])
                        <img src="{{ URL::asset('images/goldsquare.bmp') }}"
                    @else
                        <img src="{{ URL::asset('images/redsquare.bmp') }}"
                    @endif
                    title="{{ $cats[($n["category"]-1)]["name"] }} ({{ $cats[($n["category"]-1)]["nompoints"] }} pt)"> 
                @endforeach
                </td>

                <td class="bodyleft">
                @foreach ($films[$pick["film"]]["nominations"] as $n)
                    @if ("Y" == $n["winner"])
                        <img src="{{ URL::asset('images/goldsquare.bmp') }}" title="{{ $cats[($n["category"]-1)]["name"] }} ({{ $cats[($n["category"]-1)]["winpoints"] }} pt)"> 
                    @endif
                @endforeach
                </td>

                <td class="bodyleft">{{ $films[$pick["film"]]["points"] }}</td>

                </tr>
            @endforeach
        @endforeach

        </table>

        <p>Points are awarded as follows:</p>

        <table class="score" cellspacing="0">
        <tr><td class="headleft">Category</td>
        <td class="headcenter">Nomination</td>
        <td class="headcenter">Winner</td></tr>
        @foreach ($cats as $k => $c)
            @if ($k < 8)
                <tr><td class="bodyleft">{{ $c['name'] }}</td>
                <td class="bodycenter">{{ $c['nompoints'] }}</td>
                <td class="bodycenter">{{ $c['winpoints'] }}</td></tr>
            @else
                <tr><td class="bodyleft">All other categories</td>
                <td class="bodycenter">{{ $c['nompoints'] }}</td>
                <td class="bodycenter">{{ $c['winpoints'] }}</td></tr>
                @break
            @endif
        @endforeach
        </table>

    </body>

</html>
