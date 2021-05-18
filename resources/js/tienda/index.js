$(document).ready(function (e) {


    mostrarTitulos();
    $.ajax({
        async: true,
        type: "GET",
        url: "index.php?c=tienda&a=header",
        success: function (data) {
            $('#header').html(data);
        }
    });



    //funcion para mostrar los titulos de los juegos y traer el id
    function mostrarTitulos() {
        $.get('index.php?c=tienda&a=mostrarTitulos', function (e) {
            formato_titulos(e);
        });
    }

    function formato_titulos(e) {
        let titulos = JSON.parse(e);
        let template = '<option selected>Selecciona el titulo del juego</option>';

        titulos.forEach(titulo => {
            template += `
             <option value="${titulo.ID_Juego}">${titulo.Titulo}</option>
             `
        });
        $('#ID_Juego').html(template);
    }

    //funcion para capturar el valor de ID_Juego en la seleccion del titulo
    $('#ID_Juego').change(function () {
        let idjuego = $('#ID_Juego').val();
        console.log(idjuego);
        if(idjuego){
            $.get('index.php?c=tienda&a=precioTitulo', { ID_Juego: idjuego }, function (e) {
                let precios = JSON.parse(e);
                precios.forEach(precio => {
                    $('#valor').val(precio.PrecioAlquiler);
                });
            });
        }

    });

    $('#form').submit(function(e){
        e.preventDefault();
        let form =  $(this).serialize();
        console.log(form);
       $.post('index.php?c=tienda&a=AlquilerVenta',form, function(res){
             if(res == "true"){
                alert("los datos se exitosamente");
                 $('#form').trigger('reset');
             }else{
                 alert("Los datos no se pudieron guardar");
             } 
       });

    });

    




});