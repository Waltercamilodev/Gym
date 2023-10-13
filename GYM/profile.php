<?php 
if(!session_id()) {
    session_start();
} 
?>
<?php include "model/conection.php" ?>
<?php include "controller/edit.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
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
    
</head>
<body>
    <div class="row container-2">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="profile.php" method="post" class="form-login">
                <h2 class="form-title">Modificar datos</h2>
                
                <div class="form-group">
                    <input class="form-control" type="hidden" name="id" value="<?php print($_SESSION['id'])?>">
                </div>
                
                <div class="form-group">
                    <label style="color: #8f8f8f">Nombre</label>
                    <input class="form-control" type="text" name="user" value="<?php print($_SESSION['name'])?>" required>
                </div>

                <div class="form-group">
                    <label style="color: #8f8f8f">Correo</label>
                    <input class="form-control" type="text" name="email" value="<?php print($_SESSION['email'])?>" required>
                </div>

                <div class="form-group">
                    <label style="color: #8f8f8f">Contraseña</label>
                    <input class="form-control" type="text" name="pass" value="<?php print($_SESSION['password'])?>" required>
                </div>

                <div class="form-group">
                    <div class="section-2-divhyperlink w-100" style="padding: 0;">
                    
                        <div class="section-2-bottom-2" style="width: 50%; display: flex; justify-content: center; font-size: .8vw">
                            <a href="index.php" class="bottom-2">Volver</a>
                        </div>
                    
                        <button  class="section-2-bottom-1" style="width: 50%; margin: 0; text-align: center; border: none; color: white; font-size: .8vw" type="submit" name="savechanges"><p class="save-change style-font">Guardar cambios</p></button>

                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>