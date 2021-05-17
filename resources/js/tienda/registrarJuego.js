$(document).ready(function (e) {

    $.ajax({
        async: true,
        type: "GET",
         url: "index.php?c=tienda&a=header", 
         success: function(data){
         $('#header').html(data);
         }
     });

     $("#form").submit(function(e){
        e.preventDefault();
        let data = $(this).serialize();
        console.log(data);
        $.post("index.php?c=tienda&a=registrarJuego",data,function(e){
           console.log(e); 
          if(e == "true"){
               alert("El Juego se ha registrado");
                $('#form').trigger('reset');
            }else{
                alert("Los datos no se pudieron guardar");
            }  
        }); 
    });

});