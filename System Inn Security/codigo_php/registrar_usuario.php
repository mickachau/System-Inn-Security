<?php
    include("conexion.php");

        if (isset($_POST['register'])) {
            if(
                strlen( $_POST['name']) >= 1 &&
                strlen( $_POST['lastname']) >= 1 &&
                strlen( $_POST['cedula']) >= 1 &&
                strlen( $_POST['email']) >= 1 &&
                strlen( $_POST['password']) >= 1 
                
                ){
                    $name = trim($_POST['name']);
                    $lastname = trim($_POST['lastname']);
                    $cedula = trim($_POST['cedula']);
                    $email = trim($_POST['email']);
                    $password = trim($_POST['password']);
                    $fecha = date('d/m/y');
                    $consulta = "INSERT INTO usuarios_si(nombre, apellido, cedula, email, contrasenia, fecha)
                    VALUES ('$name', '$lastname', '$cedula', '$email', '$password', '$fecha')";
                    $resultado = mysqli_query($conex, $consulta);
                    if ($resultado) {
                        ?>
                        <h3 class="success">Tu registro se ha completado</h3>
                        <?php
                    } else{
                        ?>
                        <h3 class="error">Ocurrio un error </h3>
                        <?php   
                        }
                    }else{
                        ?>
                        <h3 class="error">Llena todos los campos</h3>
                        <?php   
                }
}          
?>
