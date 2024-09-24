<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Mes albums</h1>
    <?php
    $cnx = mysqli_connect("localhost", "root", "", "albums");
    
    //Vérification de la connexion
    if (mysqli_connect_errno()) {
        echo "Echec de la connexion : ".mysqli_connect_error();
        exit();
    }

    $sql = "SELECT * from albums";
    $res =mysqli_query($cnx, $sql);

    echo "<nav>";
    while($ligne = mysqli_fetch_array($res)) {
        echo "<a href='index.php?id=".$ligne['idAlb']."'>".$ligne['nomAlb']."</a>";
    }
    echo '<a href="ajouter_album.php">Ajouter un album</a>';
    echo '<a href="modifier_album.php?id='.$_GET["id"].'">Modifier un album</a>';    
    echo "</nav>";

    $sql = "SELECT * from photos, comporter WHERE photos.idPh = comporter.idPh AND idAlb =".$_GET['id'];
    $res =mysqli_query($cnx, $sql);

    echo "<main>";
    while($ligne = mysqli_fetch_array($res)) {
        echo "<a href='photo.php?id=".$ligne['idPh']."'><img id='".$ligne['idPh']."' src='photos/".$ligne['nomPh']."' /></a>";
    }
    echo "<a href='ajouter_photo.php'>Ajouter une photo</a>";
    echo "</main>";

    mysqli_free_result($res);

    mysqli_close($cnx);
    ?>
</body>
</html>