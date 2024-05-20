<?php
    include('conexion.php');
    $id =($_POST['id']);
    $name =($_POST['name']);
    $lastname =($_POST['lastname']);
    $cedula =($_POST['cedula']);
    $email =($_POST['email']);
    $id_cargo =($_POST['id_cargo']);

    $actualizar = "UPDATE usuarios_si SET nombre='$name', apellido='$lastname', cedula='$cedula', email='$email', id_cargo='$id_cargo'  WHERE id='$id'";

    $resultado = mysqli_query($conex, $actualizar);

    if ($resultado) {
        ?>
        echo "<script>alert('Se han aplicado los cambios correctamente'); window.location.href='../codigo_html/consultar_usuarios.php';</script>";
        <?php
    } else{
        ?>
        echo <script>alert('Ocurrio un error, volver a intentar'); window.location.href='actualizar_usuarios.php'
        <?php   
    }
?>