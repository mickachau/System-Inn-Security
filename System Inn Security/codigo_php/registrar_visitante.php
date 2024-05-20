<?php
    include("conexion.php");

        if (isset($_POST['register'])) {
            if(
                strlen( $_POST['cedula']) >= 1 &&
                strlen( $_POST['fullName']) >= 1 &&
                strlen( $_POST['place']) >= 1 &&
                strlen( $_POST['vehicle']) >= 1 &&
                strlen( $_POST['pet']) >= 1 
                
                ){
                    $cedula = trim($_POST['cedula']);
                    $fullName = trim($_POST['fullName']);
                    $place = trim($_POST['place']);
                    $vehicle = trim($_POST['vehicle']);
                    $pet = trim($_POST['pet']);
                    $fecha = date('d/m/y');
                    
                    $consulta = "INSERT INTO visitantes(cedula, nombre, ubicacion, vehiculo_placa, mascota_raza, fecha)
                    VALUES ('$cedula', '$fullName', '$place', '$vehicle', '$pet', '$fecha')";
                $resultado = mysqli_query($conex, $consulta);
                if ($resultado) {
                    ?>
                    <h3 class="success">se ha completado el registro</h3>
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