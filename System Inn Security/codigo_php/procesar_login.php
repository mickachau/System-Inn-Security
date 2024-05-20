<?php
$cedula = $_POST['cedula'];
$password = $_POST['password'];

//**Conectar a la base de datos 

$conex = mysqli_connect("localhost", "root","", "gestion_registros");
$consulta = "SELECT * FROM usuarios_si WHERE cedula='$cedula' and contrasenia='$password'";
$resultado = mysqli_query($conex, $consulta);

$filas = mysqli_fetch_array($resultado);

if($filas>0 && $filas['id_cargo']==1){
    header ("Location: ../codigo_html/menu_admin.php");
}else
if($filas>0 && $filas['id_cargo']==0){
    header ('location: ../codigo_html/menu_principal.php');
}else{

    echo "<script>alert('Ha ocurrido un error'); window.location.href='../codigo_html/index.php';</script>";
}

mysqli_free_result($resultado);
mysqli_close($conex);
?>



