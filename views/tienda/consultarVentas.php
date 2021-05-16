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
            <h1 align="center">Consultar Ventas del dia</h1>
        </div>

    
         
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8">
                <div class="table-responsive">
                    <table class="table table-dark table-hover tabla">
                        <thead>
                            <tr>
                                <td>Nombre del Cliente</td>
                                <td>Fecha</td>
                                <td>Venta total</td>
                            </tr>
                        </thead>

                        <tbody id="tabla-venta"></tbody>

                    </table>
                </div>
            </div>
        </div>




        <script src="resources/js/jquery-3.5.1.js"></script>
        <script src="resources/js/tienda/consultarVentas.js"></script>
</body>

</html>