<?php
    $characters = [
        ["name" => "Nero", "title" => "THE YOUNG DEVIL HUNTER", "weapon" => "Red Queen", "image_url" => "https://www.wallpaperflare.com/static/360/245/223/devil-may-cry-5-nero-devil-may-cry-devil-may-cry-man-wallpaper.jpg"],
        ["name" => "V", "title" => "THE MYSTERIOUS ONE", "weapon" => "Grimoire", "image_url" => "https://pbs.twimg.com/media/Dt0-gbTUcAALF3m?format=jpg&name=4096x4096"],
        ["name" => "Dante", "title" => "THE LEGENDARY DEVIL HUNTER", "weapon" => "Rebellion", "image_url" => "https://pbs.twimg.com/media/DppleIRV4AAPD-f?format=jpg&name=4096x4096"],
        ["name" => "Vergil", "title" => "THE ALPHA AND OMEGA!", "weapon" => "Yamato", "image_url" => "https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.6435-9/55664423_2314458478787773_1858613519289679872_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=0b6b33&_nc_ohc=emygNrOIElAQ7kNvwGrt_4A&_nc_oc=AdkTMj1X5NXTQS3UiJl0uej9xgsQZnJ9nuNKC_AFlKC282qYo-WiuOZ-PibjYnANSZY&_nc_zt=23&_nc_ht=scontent.fcrk1-4.fna&_nc_gid=lLW4yEDehVgDasLtM8S1rw&oh=00_AfImefeT9ygefnwv7F2bDkEEDYTtOejEzhY2ymODOP1Mig&oe=684944E3"]
    ];
    function display_character($character) {
        $pageFolder = ucfirst(strtolower($character["name"])) . "Page";
        $pageFile = $character["name"] . ".php";
        $pagePath = "page/{$pageFolder}/{$pageFile}";
        echo '<div class="character">';
        echo '<img src="' . $character["image_url"] . '" alt="' . $character["name"] . '">';
        echo '<div class="character-info">';
        echo '<h2>' . $character["name"] . '</h2>';
        echo '<p>Title: ' . $character["title"] . '</p>';
        echo '<p>Weapon: ' . $character["weapon"] . '</p>';
        if ($character["name"] === "Vergil") {
            echo '<div class="special-quote-container">';
            echo '<p class="special-quote">“Might controls everything!”</p>';
            echo '</div>';
        }
        echo '<a href="' . $pagePath . '" class="character-button">View ' . $character["name"] . '\'s Page</a>';
        echo '</div>';
        echo '</div>';
        echo '<hr>';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>DMC5 Characters</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/design.css">
    <link rel="stylesheet" href="./assets/css/mainstyles.css">    <link rel="stylesheet" href="./assets/css/character_cards.css">
    <script src="./assets/js/special-quote-fade.js"></script>
</head>
<body>
    <div class="dmc5-logo">
        <img src="https://www.devilmaycry.com/5/assets/img/age/logo.png" alt="DMC5 Logo">
        <h1>Devil May Cry 5 Characters</h1>
    </div>
    <div class="character-list">
        <?php foreach ($characters as $character): ?>
            <?php display_character($character); ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
