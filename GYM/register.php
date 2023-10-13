
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
    <div class="row container-2">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form  action="register.php" method="post" class="form-login">
                <h2 class="form-title">Regístrate</h2>
                <div class="form-group">
                    <input  class="form-control" type="text" name="user" placeholder="Ingrese su usuario" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Ingrese su correo" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Ingrese su contraseña" required>
                </div>
                <div class="form-group">
                    <div class="section-2-divhyperlink w-100" style="padding: 0;">
                        <button class="section-2-bottom-1" style="width: 100%; margin: 0; text-align: center; border: none; color: white; font-size: 1vw" type="submit" name="register"><p class="button-ingresar">Registrarse</p></button>
                    </div>
                </div>
                <div class="section-2-divhyperlink" style="padding:0; display: flex; flex-direction: column; align-items: center;">
                    <p style="text-align: center;">¿Ya tienes cuenta?</p>
                    <div class="section-2-bottom-2" style="display: flex; justify-content: center;">
                        <a class="bottom-2" href="login.php" class="section-1-a">Inicia sesión</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>
<?php include "model/conection.php" ?>
<?php include "controller/register.php" ?>