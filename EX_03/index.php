<?php
    session_start();
    $_SESSION['nom'] = 'Pol';
    $numero = 0;
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h2>Pàgina Login</h2>
    <form action="pàgines1.php" method="post">
        <p>Nom: <input type="text" name="nom"/></p>

    </form>
</body>
</html>



