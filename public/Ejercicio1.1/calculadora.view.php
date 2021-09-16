<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>
    <h2>
        <?=
            print_r($_GET)."<br>".
            "Suma de $_GET[x] y $_GET[y] = $suma <br>".
            "Resta de $_GET[x] y $_GET[y] = $resta <br>".
            "Multiplicaion de $_GET[x] y $_GET[y] = $multiplicaion <br>".
            "Division de $_GET[x] y $_GET[y] = $division <br>".
            "Ordenador que hace la petición: $ordenadorPeticion <br>".
            "Parámetros de la peticón: $paramPeticion <br>".
            "Ruta del sitio web en el ordenador local: $rutaSitioWeb <br>";
        ?>

    </h2>
</header>
</body>
</html>
