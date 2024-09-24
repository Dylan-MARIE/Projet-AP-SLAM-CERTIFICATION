<?php

$cnx = mysqli_connect("localhost", "root", "", "albums");
    
//Vérification de la connexion
if (mysqli_connect_errno()) {
    echo "Echec de la connexion : ".mysqli_connect_error();
    exit();
}

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

<form method="post" action="ajouter_photo.php" enctype="multipart/form-data">
    <input type="file" name="nomPh" accept="image/jpg" required/>
    <input type="submit" name="envoi" value="envoyer"/>
</form>

</body>
</html>

<?php
}else{
    print_r($_FILES);
    /*$sql = "INSERT INTO albums SET nomAlb='".$_POST["nomAlb"]."'";
    $res =mysqli_query($cnx, $sql);
    $id=mysqli_insert_id($cnx);
    header("Location: index.php?id=".$id);*/
}
?>