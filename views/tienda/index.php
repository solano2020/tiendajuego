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
            <div class="col-2"></div>
            <div class="col">
                <h1>Registro de alquiler y venta de video juegos</h1>
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Cedula del cliente</label>
                    <input type="text" class="form-control" id="cedula" placeholder="Ingrese la cedula del cliente">
                </div>
            </div>
            <div class="col-4 align-self-end">
                <div class="mb-3">
                    <button type="button" class="btn btn-success">Agregar juego</button>
                </div>
            </div>
            <div class="col-2"></div>
        </div>

        <form class="row">
            <div class="col-2"></div>
            <div class="col-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecciona el titulo del juego</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecciona el tipo</option>
                    <option value="1">Venta</option>
                    <option value="2">Alquiler</option>
                </select>
            </div>
            <div class="col-2"><p>Valor</p></div>
            <div class="col-2"></div>
        </form>

        <script src="resources/js/jquery-3.5.1.js"></script>
        <script src="resources/js/tienda/index.js"></script>
</body>

</html>