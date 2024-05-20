<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Conjuntos Residenciales</title>
    <link rel="stylesheet" href="../codigo_css/style.css">
    <link rel="stylesheet" href="cl-icon/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Formulario ingreso</title>
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

    <img class="logotipo" src="../codigo_css/logotipo.png" alt="logotipo">
    <div class="wrapper">

        <form form action="" method="post" class="form" >
            <h2 class="title">FORMULARIO DE INGRESO</h2>
            <div class="inp">
                <input Class="controls" type="number" name="cedula" id="cedula" placeholder="Ingrese su cedula" >
                <i class="fa-solid fa-id-card"></i>
            </div>
            <div class="inp">
                <input Class="controls" type="text" name="fullName" id="fullName" placeholder="Ingrese su nombre" >
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
                <input Class="controls" type="text" name="place" id="place" placeholder="Ubicacion">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="inp">
                <input Class="controls" type="text" name="vehicle" id="vehicle" placeholder="T.vehiculo y placa" >
                <i class="fa-solid fa-car"></i>
            </div>
            <div class="inp">
                <input Class="controls" type="text" name="pet" id="pet" placeholder="T.mascota y raza" >
                <i class="fa-solid fa-dog"></i>
            </div>
        
            <input class="submit" type="submit" value="Registrar" name="register">
            <p class="footer"><a href="menu_admin.php" class="link">Atras</a></p>
        </form>
    </div>

    <div class="banner">
        <h1 class="wel_text">BIENVENIDOS </Br></h1>
        <p class="para"> Gracias <br> por utilizar nuestro sistema <br>grupo SIS</p>
    </div>
    <p class="copyright">Todos los Derechos Reservados 2023 &copy;</p>

    <?php
    include("../codigo_php/registrar_visitante.php")
    ?>
    <script src="../codigo_js/interactividad.js"></script>

</body>
</html>