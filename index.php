<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Ballzor!</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="scripts/main.js"></script>
</head>
<body>
    <div class="overlay">
        <div class="gameover">
            GAMEOVER!

            <span class="points">0</span>

            <a class="btn btn-success" href="/">Play again</a>
        </div>
    </div>
    <div class="points">
        <span class="points">0</span>p
    </div>
    <div class="timer">
        <span class="timer">60</span> seconds left
    </div>

    <audio id="ball-click" src="sounds/car-hit3.mp3"></audio>
</body>
</html>