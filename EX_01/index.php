<?php
if(isset($_COOKIE['visitas']))
{
    setcookie('visitas', $_COOKIE['visitas'] +1,time()+3600*24);
    $missatge = 'Numero de visitas: '.$_COOKIE['visitas'];
}
else
{
    setcookie('visitas',1,time()+3600*24);
    $missatge = 'Bienvenido por primera vez a nuesta web';
}

?>

<html>
<head>
    <title>Cookie</title>
</head>
<body>
<p>
    <?php echo $missatge;?>
</p>
</body>
</html>
