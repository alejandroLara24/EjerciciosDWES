<?php
    $hobbies = ['Videojuegos','Futbol','Baloncesto','Tenis','Leer','Buscar Gamusinos'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>
    <form method="post" action="formulario.php">
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre">
        <br>
        <label for="birthday">Fecha de nacimiento</label>
        <br>
        <input type="date" name="birthday">
        <br>
        <label for="genero">Genero</label>
        <br>
        <input type="radio" name="genero" value="hombre">Hombre <br>
        <input type="radio" name="genero" value="mujer">Mujer <br>
        <br>
        <label for="hobbies">Hobbies</label>
        <select name="hobbies">
            <option selected>--</option>
            <?php
            foreach ($hobbies as $hobby) {
                ?>
                <option><?=$hobby?></option>
                <?php
            }
            ?>
        </select>
        <br>
        <label for="imagen">Adjunta una foto tuya</label>
        <br>
        <input type="file" name="imagen">
        <br>
        <input type="submit">
    </form>
</header>
</body>
</html>
