<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Liste des films</title>
    <link rel="stylesheet" href="style/style.css"/>
</head>
<body>
    <h1>Cinémathèque ... </h1>
    <h2>Liste des Films</h2>
<?php
require("testConnectionDB.php");
    if ($error != "") {
        echo "<p>Erreurs : $error</p>\n";
    }
    else {
        while ($film = mysqli_fetch_array($resultats_films)) {
            echo "<p>".$film["NumFilm"].", de titre ".$film["Titre"]." du genre ".$film["Genre"]."</p>\n";
    }
}
?>
</body>
</html>