<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulari</title>
    </head>
    <body>
        <h1>Pàgina Principal</h1>
        <form action="cookies.php" method="post">
            <p>Nom: <input type="text" name="nom"/></p>
            Llengua: <select name="llengua";>
                <option value="català">Català</option>
                <option value="castellà">Castellà</option>
                <option value="inglès">Inglès</option>
                <option value="alemà">Alemà</option>
                <option value="francès">Francès</option>
            </select>
            <p><input type="submit" value="Enviar"/></p>
        </form>
    </body>
</html>