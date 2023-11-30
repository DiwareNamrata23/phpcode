<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Namrata's Music App</h1>
    <h2>Songs Class</h2>
    <table border="1" >
     @foreach($songs as $song)
    <tr>
        <th>Title: </th>
        <th>Artist: </th>
        <th>Genre: </th>
        <th>Tempo: </th>
    </tr>
    <tr>
        <td>{{ $song -> getTitle() }}</td>
        <td>{{ $song -> getArtist() }}</td>
        <td>{{ $song -> getGenre() }}</td>
        <td>{{ $song -> getTempo() }}</td>


    </tr>
    @endforeach
    </table>
</body>
</html>


