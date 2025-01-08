<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bar.css">
  <title>NextGen - Player</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
  <div class="container">
    <div class="music-player">
      <audio id="audio" src=""></audio>
      <div class="player-bar">
        <img id="artwork" src="" alt="Album Art">
        <div id="songTitle">Title</div>
        <div id="songArtist">Artist</div>
        <div class="progress-container">
          <input type="range" id="progressBar" value="0" max="100" step="0.1">
        </div>
        <div class="time-display">
          <span id="currentTime">00:00</span> / <span id="duration">00:00</span>
        </div>
      </div>
    </div>
    <div class="player-bar2">
      <button id="backBtn" class="back-btn">Back</button>
      <button id="playPauseBtn" class="play-pause-btn">Play</button>
      <button id="skipBtn" class="skip-btn">Next</button>
      <button id="loopBtn" class="loop-btn">Loop</button>
      <div class="volume-container">
        <input type="range" id="volumeBar" value="100" max="100">
      </div>
    </div>
  </div>
  
  <script src="bar.js"></script>
</body>
</html>
