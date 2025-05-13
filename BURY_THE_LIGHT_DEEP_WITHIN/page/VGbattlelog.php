<?php
    $battles = array("Beowulf", "Cerberus", "Arkham", "Dante", "Mundus");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vergil's Battle Log</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/VGbattlelog.css">
</head>
<body>
    <div class="vergil-layout">
        <div class="vergil-description-side">
            <h2>Vergil's Battle Log</h2>
            <ul>
            <?php foreach ($battles as $battle): ?>
                <li>Fought against: <?php echo $battle; ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div class="vergil-image-center">
            <img src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.6435-9/55664423_2314458478787773_1858613519289679872_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=0b6b33&_nc_ohc=emygNrOIElAQ7kNvwGrt_4A&_nc_oc=AdkTMj1X5NXTQS3UiJl0uej9xgsQZnJ9nuNKC_AFlKC282qYo-WiuOZ-PibjYnANSZY&_nc_zt=23&_nc_ht=scontent.fcrk1-4.fna&_nc_gid=lLW4yEDehVgDasLtM8S1rw&oh=00_AfImefeT9ygefnwv7F2bDkEEDYTtOejEzhY2ymODOP1Mig&oe=684944E3" alt="Vergil">
        </div>
    </div>
    <div id="vergil-gif"></div>
    <hr>
    <a href="Vergil.php">Return to Vergil's Bio</a>
    <a href="../index.php">Return to Home</a>
</body>
</html>
