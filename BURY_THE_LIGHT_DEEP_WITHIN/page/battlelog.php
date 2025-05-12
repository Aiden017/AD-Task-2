<?php
    $battles = array("Beowulf", "Cerberus", "Arkham", "Dante", "Mundus");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vergil's Battle Log</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/Vergilstyle.css">">
    <style>
        ul {
            font-size: 1.5em; 
        }
    </style>
</head>
<body>
    <h2>Vergil's Battle Log</h2>
    <ul>
    <?php
        for ($i = 0; $i < count($battles); $i++) {
            echo "<li>Fought against: " . $battles[$i];
            if ($battles[$i] == "Dante") 
            echo "</li>";
        }
    ?>
    </ul>

    <hr>
    <a href="Vergil.php">Return to Vergil's Bio</a>
</body>
</html>
