<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Playlist Manager</title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

    header, footer {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    header a, footer a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }

    main {
      display: grid;
      grid-template-columns: 250px 1fr;
      grid-template-rows: auto 1fr;
      min-height: 100vh;
    }

    #sidebar {
      background-color: #eee;
      padding: 20px;
      border-right: 1px solid #ccc;
    }

    #main-content {
      padding: 20px;
    }

    /* Playlist Table Styles */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #333;
      color: #fff;
    }

    /* Playlist Form Styles */
    #playlist-form {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    #playlist-form input, #playlist-form select, #playlist-form button {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    #playlist-form button {
      background-color: #333;
      color: #fff;
      border: none;
      cursor: pointer;
    }
  </style>
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
 


class Song
// {
//     private $tempo;

//     public function setTempo($tempo)
//     {
//         if (!is_int($tempo) && (!is_string($tempo) || !ctype_digit($tempo))) {
//             throw new InvalidArgumentException("Tempo must be an integer or an integer string");
//         }
//         $this->tempo = (int)$tempo;
//     }

//     public function getTempo()
//     {
//         return $this->tempo;
//     }
// }