<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta name="description" content="En este apartado se realizaran los registros de los nuevos usuario que manipulen el software">
    <title>Conjuntos Residenciales</title>
    <link rel="stylesheet" href="../codigo_css/style.css">
    <link rel="stylesheet" href="cl-icon/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Formulario registro</title>
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

    <img class="logotipo" src="../codigo_css/logotipo.png" alt="logotipo" >
    <div class="wrapper">
        <form form action="" method="post" class="form" >
            <h2 class="title">FORMULARIO DE REGISTRO</h2>
            <div class="inp">
                <input Class="controls" type="text" id="Nombre" placeholder="Ingrese su Nombre" name="name">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
                <input Class="controls" type="text"  id="apellidos" placeholder="Ingrese su Apellido" name="lastname">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
                <input Class="controls" type="ID" name="cedula" id="id" placeholder="Ingrese su número de ID">
                <i class="fa-solid fa-id-card"></i>
            </div>
            <div class="inp">
                <input Class="controls" type="email" name="email" id="email" placeholder="Ingrese su email">
                <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="inp">
                <input Class="controls" type="password" id="contraseña" placeholder="Ingrese su Contraseña" name="password">
                <i class="fa-solid fa-lock"></i>
            </div>
            <div>
                <input class="submit" type="submit" value="Registrar" name="register"><br>
                <p class="footer"><a href="index.php" class="link">Ya tengo cuenta</a></p>
            </div>
        </form>
    </div>

    <div class="banner">
        <h1 class="wel_text">BIENVENIDOS </Br></h1>
        <p class="para"> Gracias <br> por utilizar nuestro sistema <br>grupo SIS</p>
    </div>
    
    <p class="copyright">Todos los Derechos Reservados 2023 &copy;</p>


    <?php
    include("../codigo_php/registrar_usuario.php")
    ?>

    <script src="../codigo_js/interactividad.js"></script>
</body>

</html>