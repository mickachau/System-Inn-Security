<?php
    include("../codigo_php/conexion.php");
    $usuarios_si = "SELECT * FROM usuarios_si";
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

    <div class="container__table">
        <table>
            <thead>
                <tr>
                    <th>CEDULA</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>EMAIL</th>
                    <th>CARGO</th>
                    <th>OPERACION</th>
                </tr>
            </thead>
            <?php
            $resultado = mysqli_query($conex, $usuarios_si);
            while($row = mysqli_fetch_assoc($resultado))
            { ?> 
            <tr>
                <td><?php echo $row["cedula"]?></td>
                <td><?php echo $row["nombre"]?></td>
                <td><?php echo $row["apellido"]?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["id_cargo"]?></td>
                <!-- Modificar enlaces PENDIENTE -->
                <td><a class="link" href="actualizar_usuarios.php?id=<?php echo $row["id"];?>">Modificar</a>
                |
                <a class="link" href="?id=<?php echo $row["id"];?>" class="table_item_link">Eliminar</a></td>
            </tr>
            <?php } ?>
        </table>
        <?php mysqli_free_result($resultado);?>   
    </div>
    <div class="footer__menu-consultas">
        <p class="footer"><a href="menu_admin.php" class="link">Atras</a></p>
    </div>
    <div class="banner">
        <h1 class="wel_text">BIENVENIDOS </Br></h1>
        <p class="para"> Gracias por utilizar nuestro sistema <br>grupo SIS</p>
    </div>

    <p class="copyright">Todos los Derechos Reservados 2023 &copy;</p>  
    <script src="../codigo_js/confirmacion.js"></script> 
    <script src="../codigo_js/interactividad.js"></script>

</body>
</html>
