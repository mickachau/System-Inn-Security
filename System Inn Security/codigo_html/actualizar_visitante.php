<?php
    include("../codigo_php/conexion.php");
    $id = $_GET["id"];
    $visitantes = "SELECT * FROM visitantes WHERE id = '$id'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cl-icon/css/all.min.css">
    <link rel="stylesheet" href="../codigo_css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Conjuntos Residenciales</title>
</head>
<body>

    <!-------------------------Modo claro----------------------------------->
    <div class="light__mode">
            <ul>
                <li class="switch">
                    <i class="fa-solid fa-moon"></i>
                    <i class="fa-solid fa-sun"></i>
                </li>
            </ul>
    </div>
    <!------------------------Finaliza modo claro--------------------------->

    <?php
    $resultado = mysqli_query($conex, $visitantes);
    while($row = mysqli_fetch_assoc($resultado))
    { ?> 
    <div class="wrapper">
        <form form action="../codigo_php/editar_visitante.php" method="post" class="form" >
                <h2 class="title">ACTUALIZAR VISITANTE</h2>
                <div class="inp">
                    <input Class="controls" type="hidden" name="id" id="cedula"value="<?php echo $row["id"]?>">
                    <input Class="controls" type="number" name="cedula" id="cedula"value="<?php echo $row["cedula"]?>">
                    <i class="fa-solid fa-id-card"></i>
                </div>
                <div class="inp">
                    <input Class="controls" type="text" name="fullName" id="fullName"value="<?php echo $row["nombre"]?>">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="inp">
                    <input Class="controls" type="text" name="place" id="location"value="<?php echo $row["ubicacion"]?>">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="inp">
                    <input Class="controls" type="text" name="vehicle" id="vehicle"  value="<?php echo $row["vehiculo_placa"]?>">
                    <i class="fa-solid fa-car"></i>
                </div>
                <div class="inp">
                    <input Class="controls" type="text" name="pet" id="pet" value="<?php echo $row["mascota_raza"]?>" >
                    <i class="fa-solid fa-dog"></i>
                </div>
            
                <input class="submit" type="submit" value="Actualizar" name="actualizar">
                <p class="footer"><a href="consultar_visitante.php" class="link">Atras</a></p>
        </form>
    </div>
    <?php } ?>
    <?php mysqli_free_result($resultado);?>  
    <div class="banner">
            <h1 class="wel_text">BIENVENIDOS </Br></h1>
            <p class="para"> Gracias por utilizar nuestro sistema <br>grupo SIS</p>
    </div>
    <p class="copyright">Todos los Derechos Reservados 2023 &copy;</p>  
        
    <script src="../codigo_js/interactividad.js"></script>

</body>
</html>
