<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Prueba Héctor</title>
</head>
<body>
    <div class="form">
        <form action="script.php" method="POST">
        <p>Nombre</p>
        <label for="name">Escribe tu nombre: </label>
        <br>
        <input type="text" name="name" placeholder="escribe tu nombre" required>
        <p>Correo electronico</p>
        <label for="mail">Direcccion de correo:</label>
        <br>
        <input type="email" name="mail" placeholder="ejemplo@algo.com" required>

        <p>Género</p>
        <label for="genero">Selecciona el género: </label>
        <select name="genero" id="genero">
            <option value="niño">niño</option>
            <option value="niña">niña</option>
        </select>
        <br>
        <br>
        <br>
        <br>
        <input type="submit" value="Enviar" href="http://localhost:50/prueba/catalogo.php">
        </from>
    </div>
</body>
</html>