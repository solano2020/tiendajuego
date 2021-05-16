<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="resources/js/bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="resources/css/bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="resources/css/main.css" type="text/css">
    <title>Tienda Game</title>
</head>

<body>

    <div class="container-fluid">
        <!-- header -->
        <div class="row" id="header"></div>

        <div class="row">
            <h1 align="center">Consultar Cliente</h1>
        </div>

        <div class="row g-3">
            <div class="col-2"></div>
            <div class="col-auto  align-self-end">
                <div class="mb-3">
                    <label for="inputPassword6" class="col-form-label my-2">Buscar Cliente</label>
                </div>
            </div>
            <div class="col-md-4">
                <input type="search" id="buscar" class="form-control" aria-label="Search" placeholder="Ingrese el nombre del punto de venta">
            </div>
        </div>
         
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8">
                <div class="table-responsive">
                    <table class="table table-dark table-hover tabla">
                        <thead>
                            <tr>
                                <td>Nombre del Cliente</td>
                                <td>Juegos Alquilados</td>
                                <td></td>
                
                            </tr>
                        </thead>

                        <tbody id="tabla-clientes"></tbody>

                    </table>
                </div>
            </div>
        </div>


        <script src="resources/js/jquery-3.5.1.js"></script>
        <script src="resources/js/tienda/consultarCliente.js"></script>
</body>

</html>