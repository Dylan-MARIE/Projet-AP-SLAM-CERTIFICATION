<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $cnx = mysqli_connect("localhost", "root", "", "albums");
    
    //Vérification de la connexion
    if (mysqli_connect_errno()) {
        echo "Echec de la connexion : ".mysqli_connect_error();
        exit();
    }

    $sql = "SELECT * from photos WHERE idPh=".$_GET['id'];
    $res =mysqli_query($cnx, $sql);

    
    

    echo "<main>";
    $ligne = mysqli_fetch_array($res);
    echo "<img src='photos/".$ligne['nomPh']."' />";
    echo "</main>";

    mysqli_free_result($res);

    mysqli_close($cnx);
    ?>
</body>
</html>