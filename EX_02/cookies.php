<?php
if(!$_POST){
    header('Location: index.php');
}

$nom = $_POST['nom'];
$llengua = $_POST['llengua'];

setcookie('nom', $nom);
setcookie('llengua', $llengua);

$missatge = "Hola $nom has elegit que la pàgina estigui amb $llengua.";

?>

<html>
<head>
    <title>Cookies</title>
</head>
<body>
<p>
    <?php echo $missatge; ?>
</p>
</body>




