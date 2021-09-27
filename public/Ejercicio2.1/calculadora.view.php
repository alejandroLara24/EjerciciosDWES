<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?= $greetins ?>
    <br>
    <?= $error ?>
    <br>
    <?= $resultado ?>
    <br>
    <header>
        <form method="post" action="calculadora.php">
            <label for="operando1">Primer operando</label>
            <br>
            <input type="number" name="operando1">
            <br>
            <label for="operando2">Segundo operando</label>
            <br>
            <input type="number" name="operando2">
            <br>
            <label for="operacion">Operacion a realizar(suma, resta, multiplicacion o division)</label>
            <br>
            <select name="operacion">
                <option value="">--</option>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicacion</option>
                <option value="division">Division</option>
            </select>
            <br>
            <input type="submit">
        </form>
    </header>
</body>
</html>
