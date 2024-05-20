<?php
    include ("conexion.php");
    $id = $_GET['id'];
    $eliminar = "DELETE FROM visitantes WHERE id = '$id' ";
    $resultado = mysqli_query($conex, $eliminar);

    if($resultado){
        header("Location: ../codigo_html/consultar_visitante.php");
    }else{
        echo "<script>alert('No se pudo eliminar el registro');</script>";
        header("Location: ../codigo_html/consultar_visitante.php");
    }



