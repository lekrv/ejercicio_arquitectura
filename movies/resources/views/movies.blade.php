<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>movies</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<div>
    <table border="1">
        <tr>
            <td style="align:left;">Titulo</td>
            <td style="align:left;">Titulo Original</td>
            <td style="align:left;">Puntuación</td>
        </tr>
        <tbody>
           @foreach($movies AS $movie)
               <tr>
                   <td style="align:left;">{{ $movie->title }}</td>
                   <td style="align:left;">{{ $movie->original_title }}</td>
                   <td style="align:left;">{{ $movie->vote_average }}</td>
               </tr>
           @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
