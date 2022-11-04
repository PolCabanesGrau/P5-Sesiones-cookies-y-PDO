<?php
session_start();
if($_SESSION) {
    $nom = $_SESSION['nom'];
    echo "Hola $nom !";
}else{
    echo "No has iniciat la sessió";
}
?>

<?php
$numero=0;
if (isset($_POST["numero"])) {
    $numero=(int)$_POST["numero"];
}

if (isset($_POST['pàgina_següent']))
{
    $numero+=10;
} elseif (isset($_POST['pàgina_anterior'])) {
    $numero+=10;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <form name = "submit" action = "pàgines1.php" method = "POST">
        <p></p>
        <p> Contador: <input type="number" name="numero" value="<?php echo $numero?>"</p>
        <p></p>
        <input type = "submit" name = "pàgina_següent" value = "Pàgina Següent"><br>
        <p></p>
        <input type = "submit" name = "pàgina_anterior" value = "Pàgina Anterior">
        <p></p>
        <a href="tancar.php">Tancar la Sessió</a>
    </form>
</body>
</html>
