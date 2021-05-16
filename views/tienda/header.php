<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tienda Game</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuclientes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestion clientes
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="index.php?c=tienda&a=VregistrarCliente">Registrar</a></li>
                            <li><a class="dropdown-item" href="index.php?c=tienda&a=VconsultarCliente">Consultar Clientes</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menujuegos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestion juegos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="index.php?c=tienda&a=VregistrarJuego">Registrar juego</a></li>
                            <li><a class="dropdown-item" href="index.php?c=tienda&a=VconsultarPrecios">Consultar precios de alquiler y venta juegos</a></li>
                            <li><a class="dropdown-item" href="index.php?c=tienda&a=VregistrarTransaccion">Registro de alquiler y venta de juegos</a></li>
                            <li><a class="dropdown-item" href="index.php?c=tienda&a=VconsultarVentas">Consultar ventas del dia</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    
    <script src="resources/js/jquery-3.5.1.js"></script>
    <script src="resources/js/tienda/header.js"></script>
</body>

</html>