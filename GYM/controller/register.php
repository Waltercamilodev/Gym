<?php

$objConexion = new conexion();

if ($_POST) {

    if(isset($_POST['register'])) {

        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check = "SELECT * FROM user WHERE email = '$email'";
        $check = $objConexion->consultar($check);

        $newConection = new conexion();

        if (count($check) == 0) {
            $sql = "INSERT INTO `user` (`id`, `name`, `email`, `pass`, `role`) VALUES (NULL, '$user', '$email', '$password', 'usuario')";
            $newConection->ejecutar($sql);
    
            ?>
                <script>
                swal("Registrado con éxito!", "", "success");
    
                setTimeout(() => {
                    location = "login.php"
                }, 1000);
                </script>
            <?php
    
        } else {

            ?>
            <script>swal("Correo o usuario ya registrados", "", "error"); </script>
            <?php

        }


    }

}

?>