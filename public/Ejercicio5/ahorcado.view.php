<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <form method="POST" action="ahorcado.php">
                <div><?php $_SESSION['fin'] = $_SESSION['ofegat']->render() ?></div>
                <br>
                <?php if ($_SESSION['intentos'] < 6 && $_SESSION['fin'] == 1) {?>
                    <div>Lo conseguiste</div>
                    <br>
                    <a href="ahorcado.php"><button type="button" class="btn btn-primary">Reiniciar</button></a>
                <?php }
                if ($_SESSION['intentos'] == 6) {?>
                    <div>O.F.E.G.A.T</div>
                    <br>
                    <a href="ahorcado.php"><button type="button" class="btn btn-primary">Reiniciar</button></a>
                <?php } else {?>
                    <div>Fallos: <?= $_SESSION['intentos'] ?> / 6</div>
                <br>
                <?php }
                if ($_SESSION['intentos'] < 6 && $_SESSION['fin'] == 0) {?>
                <div class="form-group">
                    <label for="letra">Letra</label>
                    <input name="letra" type="text" class="form-control" id="letra"  placeholder="Introduce una letra" maxlength="1" required>
                </div>
                <button type="submit" class="btn btn-primary">Comprobar</button>
                <?php } ?>
            </form>
        </div>
    </div>
</section>
</body>
</html>
