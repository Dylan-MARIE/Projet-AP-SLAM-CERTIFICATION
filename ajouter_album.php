<?php

if(empty($_POST)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" action="ajouter_album.php">
    <input type="text" name="nomAlb"/>
</form>

</body>
</html>

<?php
}else{
    $cnx = mysqli_connect("localhost", "root", "", "albums");
    
    //Vérification de la connexion
    if (mysqli_connect_errno()) {
        echo "Echec de la connexion : ".mysqli_connect_error();
        exit();
    }

    $sql = "INSERT INTO albums SET nomAlb='".$_POST["nomAlb"]."'";
    $res =mysqli_query($cnx, $sql);
    $id=mysqli_insert_id($cnx);
    header("Location: index.php?id=".$id);

}
?>