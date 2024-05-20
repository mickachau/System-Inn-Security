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

    <img src="../codigo_css/logotipo.png" alt="Logotipo" class="logotipo">
    
    <div class="wrapper">
        <form action="../codigo_php/procesar_login.php" class="form"  method="post">
            <h2 class="title">INICIO</h2>
            <div class="inp">
                <input type="number" name="cedula" id="cedula" class="input" placeholder="Usuario">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
                <input type="password" name="password" id="password" class="input" placeholder="Contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>
            
            <button class="submit" name="login">Iniciar Sesión</button></a>
            <p class="footer">¿no estás registrado?<a href="form_registro_usuario.php" class="link"> Por favor, registrate</a></p>
            
        </form>
        <div class="banner">
            <h1 class="wel_text">BIENVENIDOS </Br></h1>
            <p class="para"> Gracias por utilizar nuestro sistema <br>grupo SIS</p>
        </div>
    </div>
    <p class="copyright">Todos los Derechos Reservados 2023 &copy;</p>

    <script src="../codigo_js/interactividad.js"></script>
</body>
</html>