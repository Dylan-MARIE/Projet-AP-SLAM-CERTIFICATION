<?php
    $cnx = mysqli_connect("localhost", "root", "", "albums");

    //Vérification de la connexion
    if (mysqli_connect_errno()) {
        echo "Echec de la connexion : ".mysqli_connect_error();
        exit();
    }

if(empty($_POST)){
    $sql = "SELECT * FROM albums WHERE idAlb=".$_GET['id'];
    $res = mysqli_query($cnx, $sql);
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

<form method="post" action="modifier_album.php?id=<?php echo $_GET['id'] ?>">
    <input type="text" name="nomAlb"/>
</form>

</body>
</html>

<?php
}else{
    $sql = "UPDATE albums SET nomAlb='".$_POST['nomAlb']."' WHERE idAlb=".$_GET['id'];
    $res =mysqli_query($cnx, $sql);
    header("Location: index.php?id=".$_GET['id']);
}
?>