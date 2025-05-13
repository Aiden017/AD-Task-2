<?php
    $battles = array("Golliath", "Elder Geryon Knight", "Urizen");
?>
<!DOCTYPE html>
<html>
<head>
    <title>V's Battle Log</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/Vsbattlelog.css">
</head>
<body>
    <div class="v-layout">
        <div class="v-description-side">
            <h2>V's Battle Log</h2>
            <ul>
            <?php foreach ($battles as $battle): ?>
                <li>Fought against: <?php echo $battle; ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div class="v-image-center">
            <img src="https://pbs.twimg.com/media/Dt0-gbTUcAALF3m?format=jpg&name=4096x4096" alt="V">
        </div>
    </div>
    <div id="v-gif"></div>
    <hr>
    <a href="v.php">Return to V's Bio</a>
    <a href="../index.php">Return to Home</a>
</body>
</html>
