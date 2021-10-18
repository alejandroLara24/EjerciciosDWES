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
    <form method="post" action="formulario.php" enctype="multipart/form-data">
        <label for="dni">Dni</label>
        <br>
        <input type="text" name="dni">
        <br>
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
        <input type="radio" name="genero" value="H">Hombre <br>
        <input type="radio" name="genero" value="M">Mujer <br>
        <br>
        <label for="hobbies">Hobbies</label>
        <select name="hobbies">
            <option selected>--</option>
            <?php
            foreach ($hobbies as $key => $hobby) {
                ?>
                <option value="<?=$key?>"><?=$hobby?></option>
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
