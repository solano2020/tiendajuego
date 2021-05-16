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

        <div class="row"> <h1 align="center">Registrar Cliente</h1></div>
        
        <div class="row justify-content-center">
             <div class="col-6">

                     <form id="form">
                         <div class="mb-1">
                             <label for="inputNombre" class="form-label">Nombres</label>
                             <input type="text" class="form-control" id="Nombres" name="Nombre" placeholder="Ingrese el nombre" require>
                         </div>

                         <div class="mb-1">
                             <label for="inputNit" class="form-label">Apellidos</label>
                             <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Ingrese los apellidos" require>
                         </div>

                         <div class="mb-1">
                             <label for="inputDireccion" class="form-label">Cedula</label>
                             <input type="text" class="form-control" id="Cedula" name="Cedula" placeholder="Ingrese Cedula" require>
                         </div>

                         <div class="mb-1">
                             <label for="inputEdad" class="form-label">Edad</label>
                             <input type="number" class="form-control" id="Edad" name="Edad" placeholder="Ingrese la Edad" require> 
                         </div>
                         
                         <div class="mb-1">
                             <label for="inputEdad" class="form-label">Correo</label>
                             <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Ingrese el correo" require> 
                         </div>

                         <div class="mb-1">
                             <label for="inputTelefono" class="form-label">Telefono</label>
                             <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Ingrese el Telefono" require> 
                         </div>

                         <div class="mb-1">
                             <label for="inputDireccion" class="form-label">Direccion de residencia</label>
                             <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Ingrese la Direccion" require> 
                         </div>


                         <div class="mb-3 d-grid gap-2">
                             <input type="submit" class="btn btn-primary" value="Guardar Cliente">
                         </div>

                     </form>
                 
             </div>
         </div>



        <script src="resources/js/jquery-3.5.1.js"></script>
        <script src="resources/js/tienda/registrarCliente.js"></script>
</body>

</html>