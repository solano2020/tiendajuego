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
            <h1 align="center">Registrar juego</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">

                <form id="form">
                    <div class="mb-1">
                        <label for="inputTitulo" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="Titulo" name="Titulo" placeholder="Ingrese el Titulo del Juego" require>
                    </div>

                    <div class="mb-1">
                        <label for="inputNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el Nombre del juego" require>
                    </div>

                    <div class="mb-1">
                        <label for="inputAnio" class="form-label">Año</label>
                        <input type="text" class="form-control" id="Anio" name="Anio" placeholder="Ingrese el Año del juego" require>
                    </div>

                    <div class="mb-1">
                        <label for="inputProtagonistas" class="form-label">Protagonistas</label>
                        <input type="text" class="form-control" id="Protagonistas" name="Protagonistas" placeholder="Ingrese los Protagonistas" require>
                    </div>

                    <div class="mb-1">
                        <label for="inputEdad" class="form-label">Director</label>
                        <input type="text" class="form-control" id="Director" name="Director" placeholder="Ingrese el Director" require>
                    </div>

                    <div class="mb-1">
                        <label for="inputProductor" class="form-label">Productor</label>
                        <input type="text" class="form-control" id="Productor" name="Productor" placeholder="Ingrese el Productor" require>
                    </div>


                    <div class="form-group my-3" id='tecno'>
                        <label for="tecnologia">Tecnologia</label>
                        <select class="form-control" id="Tecnologia" name="Tecnologia" required>
                            <option disabled selected>seleccione la tecnologia</option>
                            <option value="Xbox">xbox</option>
                            <option value="PlayStation">PlayStation</option>
                            <option value="Nintendo">Nintendo</option>
                            <option value="PC">PC</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="inputAlquiler" class="form-label">Precio de Alquiler</label>
                        <input type="number" class="form-control" id="Precio" name="Precio" placeholder="Ingrese el precio de alquiler" require>
                    </div>

                    <div class="mb-3 d-grid gap-2">
                        <input type="submit" class="btn btn-primary" value="Guardar Juego">
                    </div>

                </form>

            </div>
        </div>


        <script src="resources/js/jquery-3.5.1.js"></script>
        <script src="resources/js/tienda/registrarJuego.js"></script>
</body>

</html>