<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Conjuntos Residenciales</title>
    <link rel="stylesheet" href="../codigo_css/style.css">
    <link rel="stylesheet" href="cl-icon/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Menú Principal</title>
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

    <img src="../codigo_css/logotipo.png" alt="">
    <div class="wrapper">
        <div class="wrapper__menu">
                <h2 class="title">MENÚ PRINCIPAL</h2>
                <div class="wrapper__menu-submit">
                    <a href="form_registro_visitante.php"> <input class="submit" type="button" value="Registro Visitante"> </a>
                </div>
                <div class="wrapper__menu-submit">
                    <a href="consultar_visitante.php"><input class="submit" type="button" value="Consultar registros"></a>
                </div>
                <div class="wrapper__menu-submit">
                    <p class="footer"><a href="index.php" class="link">Salir</a></p>
                </div>
        </div>
    </div>
    <div class="banner">
        <h1 class="wel_text">BIENVENIDOS </Br></h1>
        <p class="para"> Gracias <br> por utilizar nuestro sistema <br>grupo SIS</p>
    </div>

    <p class="copyright">Todos los Derechos Reservados 2023 &copy;</p>
    <script src="../codigo_js/interactividad.js"></script>

</body>
</html>