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
            <h1 align="center">Registro de alquiler y venta de video juegos</h1>
        </div>
        <div class="row">
        <div class="col-2"></div>
        <div class="col-2 align-self-end">
            <div class="mb-3">
                <button type="button" id="add-item" class="btn btn-success">Agregar juego</button>
            </div>
        </div>
        </div>

        <form id="form">
            <div class="row">
                <div class="col-2"></div>

                <div class="col-2">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Cedula del cliente</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese la cedula del cliente">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3"> <label for="fortotalventa" class="form-label">total venta</label>
                    </div>
                </div>

                <div class="col-2"></div>

            </div>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-2">
                    <select class="form-select" id="ID_Juego" name="ID_Juego" aria-label="Default select example">
                        <!-- contenido de los titulos  -->
                    </select>
                </div>

                <div class="col-2" id="form-fecha">
                    <input type="date" id="Fecha" name="Fecha" class="form-control"></input>
                    <label for="formGroupExampleInput" class="form-label">Fecha entrega</label>
                </div>

                <div class="col-2">
                    <input type="number" class="form-control" id="valor" name="valor" require>
                    <label for="formvalor" class="form-label">valor de alquiler</label>
                </div>
                <div class="col-2"></div>

                <div class="mb-3 d-grid gap-2">
                    <input type="submit" class="btn btn-primary" value="Guardar Alquiler">
                </div>
            </div>
        </form>

        <form class="row" id="form-add"></form>






        <script src="resources/js/jquery-3.5.1.js"></script>
        <script src="resources/js/tienda/index.js"></script>
</body>

</html>