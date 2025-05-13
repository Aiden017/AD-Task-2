<?php
    $battles = array("Mundus", "Nelo Angelo", "Arius", "Urizen", "Vergil");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dante's Battle Log</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/Dantebattlelog.css">
</head>
<body>
    <div class="dante-layout">
        <div class="dante-description-side">
            <h2>Dante's Battle Log</h2>
            <ul>
            <?php foreach ($battles as $battle): ?>
                <li>Fought against: <?php echo $battle; ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div class="dante-image-center">
            <img src="https://pbs.twimg.com/media/DppleIRV4AAPD-f?format=jpg&name=4096x4096" alt="Dante">
        </div>
    </div>
    <div id="dante-gif"></div>
    <hr>
    <a href="Dante.php">Return to Dante's Bio</a>
    <a href="../index.php">Return to Home</a>
</body>
</html>
