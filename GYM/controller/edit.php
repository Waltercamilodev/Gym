<?php

$ObjConexion = new conexion();

if($_POST) {

    if(isset($_POST['savechanges'])) {

        $id = $_POST['id'];
        $name = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $sql = "UPDATE `user` SET `name` = '$name', `email` = '$email', `pass` = '$pass' WHERE `user`.`id` = $id";
        $ObjConexion->ejecutar($sql);

        $_SESSION = array( 
            "id"=>$id,
            "name"=>$name,
            "email"=>$email,
            "password"=>$pass,
            "rol"=>$_SESSION['rol']
        );

        ?>
            <script>location = "profile.php"</script>
        <?php

    }

}

?>