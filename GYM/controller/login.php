<?php

$objConexion = new Conexion();

if ($_POST) {

    if(isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = "SELECT * FROM user WHERE email = '$email'";
        $login = $objConexion->consultar($login);

        if (count($login) == 0) {
            ?>
            <script>swal("Contraseña o correo incorrectos", "", "error"); </script>
            <?php
        } else {
            if (($password == $login[0]['pass'])) {
                session_start();
                $_SESSION = array( 
                    "id"=>$login[0]['id'],
                    "name"=>$login[0]['name'],
                    "email"=>$login[0]['email'],
                    "password"=>$login[0]['pass'],
                    "rol"=>$login[0]['role']
                );
    
                
            ?>
                <script>
                swal("Sesión iniciada con éxito", "", "success");
    
                setTimeout(() => {
                    location = "index.php"
                }, 1000);
                </script>
            <?php
    
            } else {
            ?>
                <script>swal("Contraseña o correo incorrectos", "", "error"); </script>
            <?php
            }
        }

    }

    if (isset($_POST['logout'])) {
        session_destroy();
        ?>
            <script>location = "index.php"</script>
        <?php
    };

}

?>