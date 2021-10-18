<?php

require ("../../kernel.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">DNI</th>
            <th scope="col">Nom</th>
            <th scope="col">DataNaixement</th>
            <th scope="col">Sexe</th>
            <th scope="col">Hobby</th>
            <th scope="col">Foto</th>
        </tr>
        </thead>
        <tbody>
    <?php
        foreach ($query->findAll('alumnes') as $alumno) {
    ?>
            <tr>
                <th><?=$alumno->dni?></th>
                <th><?=$alumno->Nom?></th>
                <th><?=$alumno->DataDeNaixement?></th>
                <th><?=$alumno->Sexe?></th>
                <th><?=$alumno->Hobby?></th>
                <th><?=$alumno->Foto?></th>
            </tr>
    <?php
        }
    ?>
        </tbody>
    </table>
</body>
</html>






