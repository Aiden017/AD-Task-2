<?php
    $battles = array("Agnus", "Credo", "Sanctus", "Dante", "Urizen");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nero's Battle Log</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/NRbattlelog.css">
</head>
<body>
    <div class="nero-layout">
        <div class="nero-description-side">
            <h2>Nero's Battle Log</h2>
            <ul>
            <?php foreach ($battles as $battle): ?>
                <li>Fought against: <?php echo $battle; ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div class="nero-image-center">
            <img src="https://www.wallpaperflare.com/static/360/245/223/devil-may-cry-5-nero-devil-may-cry-devil-may-cry-man-wallpaper.jpg" alt="Nero">
        </div>
    </div>
    <div id="nero-gif"></div>
    <hr>
    <a href="nero.php">Return to Nero's Bio</a>
    <a href="../index.php">Return to Home</a>
</body>
</html>
