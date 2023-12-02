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

      <!-- Playlist Table -->
      <table>
        <thead>
          <tr>
            <th>Serial No</th>
            <th>Song Title</th>
            <th>Artist Name</th>
            <th>Album Name</th>
            <th>Duration</th>
          </tr>
        </thead>
        <tbody>
          <!-- Playlist rows go here -->
        </tbody>
      </table>

      <!-- Playlist Form -->
      <form id="playlist-form">
        <input type="text" placeholder="Playlist Name">
        <select>
          <option value="" selected disabled>Select a Song</option>
          <!-- List of songs goes here -->
        </select>
        <button type="submit">Save Playlist</button>
      </form>
    </div>
  </main>

  <footer>
    <a href="#">Copyright</a>
    <a href="#">About</a>
  </footer>

</body>
</html>