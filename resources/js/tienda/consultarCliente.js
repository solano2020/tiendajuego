$(document).ready(function (e) {

    $.ajax({
        async: true,
        type: "GET",
         url: "index.php?c=tienda&a=header", 
         success: function(data){
         $('#header').html(data);
         }
     });

     mostraralquiler();
     
     function mostraralquiler(){
         $.get('index.php?c=tienda&a=alquilerGeneral',function(e){
            let clientes = JSON.parse(e);
            let template = '';
            clientes.forEach(cliente => {
                template += `
                     <tr>
                         <td>${cliente.Nombres}</td>
                         <td>${cliente.nombrejuego}</td>
                         <td>${cliente.fecha_ini}</td> 
                         <td>${cliente.fecha_fin}</td> 
                    </tr>`
            });
            $('#tabla-clientes').html(template);
         });
     }

});