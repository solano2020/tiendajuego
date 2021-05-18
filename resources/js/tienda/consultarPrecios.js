$(document).ready(function (e) {
    mostrartitulos();

    $.ajax({
        async: true,
        type: "GET",
         url: "index.php?c=tienda&a=header", 
         success: function(data){
         $('#header').html(data);
         }
     });

     //busqueda de puntos de venta
     $('#buscarTitulo').keyup(function(){   
         if($('#buscarTitulo').val()){
            let titulo = $('#buscarTitulo').val();
            console.log(titulo);
            $.post('index.php?c=tienda&a=consultarTitulo',{titulo : titulo}, function(e){
               contenido_tabla(e);
            });
         }else{
             mostrartitulos();
         }
           
     });

       //mostrar los puntos en la tabla
    function mostrartitulos() {
        $.get('index.php?c=tienda&a=getJuegos', function (e) {
           contenido_tabla(e);
        });
    }

    //Estructura para mostrar datos en la tabla puntos de venta
    function contenido_tabla(e){
        let juegos = JSON.parse(e);
        let template = '';
        juegos.forEach(juego => {
            template += `
                 <tr ID_Juego="${juego.ID_Juego}">
                     <td>${juego.ID_Juego}</td>
                     <td>${juego.Titulo}</td>
                     <td>${juego.PrecioAlquiler}</td>
                     <td><button class='btn btn-warning' id="modificar-precio">Modificar</button></td>  
                </tr>`
        });
        $('#tabla-precios').html(template);
    }
    
      //mostrar la vista de modificar el punto 
    $(document).on('click', '#modificar-precio', function () {
        let elemento = $(this)[0].parentElement.parentElement;
        let id = $(elemento).attr('ID_Juego');
        
        location.href = "index.php?c=tienda&a=VmodificarPrecio&id=" + id;
    
       
    });

});