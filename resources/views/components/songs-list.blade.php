<div class="playlist-info">
        <h2>Now Playing</h2>
        <p>Playlist Name: K-Drama OST</p>
      </div>     
        <div class="song-list">
        <div class="song-item">
            <div>Serial No</div>
            <div>Song Title</div>
            <div>Artist Name</div>
            <div>Duration</div>
            </div>
</div>

            @foreach($songs as $song)
            <div class="song-item">
                <div>1</div>
                <div>{{ $song->title }}</div>
                <div>{{ $song->artist }}</div>
                <div>3:30</div>
            </div>
            @endforeach