<?php
    include('conexion.php');
    $id =($_POST['id']);
    $cedula =($_POST['cedula']);
    $fullName =($_POST['fullName']);
    $place =($_POST['place']);
    $vehicle =($_POST['vehicle']);
    $pet =($_POST['pet']);

    $actualizar = "UPDATE visitantes SET cedula='$cedula', nombre='$fullName', ubicacion='$place', vehiculo_placa='$vehicle', mascota_raza='$pet'  WHERE id='$id'";

    $resultado = mysqli_query($conex, $actualizar);

    if ($resultado) {
        ?>
        echo "<script>alert('Se han aplicado los cambios correctamente'); window.location.href='../codigo_html/consultar_visitante.php';</script>";
        <?php
    } else{
        ?>
        echo <script>alert('Ocurrio un error, volver a intentar'); window.location.href='editar_visitante.php'
        <?php   
    }
?>