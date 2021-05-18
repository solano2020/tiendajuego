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
     

        <div class="row"> <h1 align="center">Actualizar precio</h1></div>
        
        <div class="row justify-content-center">
             <div class="col-6">

                     <form id="form">
                         <div class="mb-1">
                             <label for="inputNombre" class="form-label">Titulo</label>
                             <input type="text" class="form-control" id="Titulo" name="Titulo">
                         </div>

                         <div class="mb-1">
                             <label for="inputNit" class="form-label">Precio Alquiler</label>
                             <input type="number" class="form-control" id="PrecioAlquiler" name="PrecioAlquiler">
                         </div>

                         <div class="mb-3 d-grid gap-2">
                             <input type="submit" class="btn btn-primary" value="Actualizar Datos">
                         </div>

                     </form>
                 
                     <div class="d-flex justify-content-center">
                        <?php
                        echo "<a href='index.php?c=tienda&a=VconsultarPrecios'>Regresar</a>";
                        ?>
                    </div>
                 
             </div>
         </div>



        <script src="resources/js/jquery-3.5.1.js"></script>
        <script src="resources/js/tienda/modificarPrecio.js"></script>
</body>

</html>