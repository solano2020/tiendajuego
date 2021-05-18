$(document).ready(function (e) {


     

      //capturamnos el id punto de venta de la url 
      const url = location.href;
      const idUrl = url.substring(url.search("id="));
      var id = idUrl.substring(3);

      mostrar_juego();
    $.ajax({
        async: true,
        type: "GET",
         url: "index.php?c=tienda&a=header", 
         success: function(data){
         $('#header').html(data);
         }
     });

   // muestra los datos del juego
     function mostrar_juego(){
        if(id != null){
            $.post('index.php?c=tienda&a=consultarjuego', {id} , function (response) {
                console.log(response);
                const juego = JSON.parse(response);
                $('#Titulo').val(juego.Titulo);
                $('#PrecioAlquiler').val(juego.PrecioAlquiler); 
            });
        }
    }
   
    //Actualizar datos 
        //se envian los datos para actualizar
        $('#form').submit(function (e){
            e.preventDefault(); 

               if(confirm("¿Desea Actualizar los datos?")){
                   let data = $(this).serialize()+"&"+idUrl;
                   console.log(data);
                   $.post('index.php?c=tienda&a=actualizarJuego', data, function(e){
                      console.log(e);
                       mostrar_juego();
                   }); 
               }else{
                   mostrar_juego();
               }  
             
       });
       
});