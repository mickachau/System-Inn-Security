<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../codigo_css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Conjuntos residenciales</title>
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

    <div class="wrapper">
        <form action="" class="form"  method="post">
            <h2 class="title">INFORMES</h2>
            <div>
                <label for="fecha-inicial">Fecha inicial</label>
                <input type="date" class="controls" id="fecha-inicial">
            </div>
            <div>
                <label for="fecha-final">Fecha final</label>
                <input type="date" class="controls" id="fecha-inicial">
            </div>
            <div>
                <label for="tipo-informe">Tipo de informe</label>
                <select name="" id="tipo-informe" class="controls">
                    <option value="">Seleccione</option>
                    <option value="">Visitantes registrados</option>
                    <option value="">Vehiculos registrados</option>
                    <option value="">Mascotas registradas</option>
                    <option value="">Todos</option>
                </select>
            </div>
            <div>
                <button class="submit" name="login">Exportar</button></a>
                <p class="footer"><a href="menu_admin.php" class="link">Atras</a></p>
            </div>
        </form>
        <div class="banner">
            <h1 class="wel_text">BIENVENIDOS </Br></h1>
            <p class="para"> Gracias por utilizar nuestro sistema <br>grupo SIS</p>
        </div>
    </div>
    <script src="../codigo_js/interactividad.js"></script>

</body>
</html>