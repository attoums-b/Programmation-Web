

<?php
require("connect.php");
$connexion = mysqli_connect(SERVEUR,LOGIN,PASSE);

if (!$connexion) {
    echo "Connexion à ".SERVEUR." impossible\n";
    exit;
    }
    if (!mysqli_select_db($connexion, BASE)) {
    echo "Accès à la base ". BASE ." impossible\n";
    exit;
    }
echo "Connecté au SGBD MariaDB, à la base ". BASE ."\n";
mysqli_set_charset($connexion,"utf8");
$requete="select F.NumFilm, F.Titre , R.Prenom , R.Nom from MI0A401T_Films as F INNER JOIN MI0A401T_Individus AS R ON F.NumInd = R.NumInd";

$resultat_titiren2 = mysqli_query($connection,"select * from MI0A401T_Films;");
$error = "";
if (!$resultats_titren2) {
    $error = mysqli_error($connexion);
}

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cinémathèque</h1>

<?php
if ($error != "") {
    echo "<p>Erreurs : $error</p>\n";
} else {
    echo "<p>verification</p>";
    echo "<ul>";
    // Correction de la boucle while et des échos
    while ($filmselect = mysqli_fetch_array($resultats_titren2)) {
        echo "<p>verification2</p>";
        echo "<li>" . $filmselect["NumFilm"].  "</li>\n";
    }
    echo "</ul>";
}
?>


    
</body>
</html>