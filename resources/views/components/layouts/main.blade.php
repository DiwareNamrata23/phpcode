<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? "Cool Web App" }}</title>
  <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />

</head>
<body>

  <header>
    <h1>Playlist Manager</h1>
    <a href="#">Copyright</a>
    <a href="#">About</a>
  </header>

  <main>
    <div id="sidebar">
      <h2>Saved Playlists</h2>
      <!-- List of saved playlists goes here -->
    </div>

    <div id="main-content">
      <h2>Current Playlist</h2>
      <a href="#" style="float: right;">Edit Playlist</a>
      <a href="#" style="float: right; margin-right: 10px;">New Playlist</a>
      @yield('content')
    </div>
  </main>

  <footer>
    <a href="#">Copyright</a>
    <a href="#">About</a>
  </footer>

</body>
</html>