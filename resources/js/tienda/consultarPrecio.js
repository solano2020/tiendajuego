$(document).ready(function (e) {

    $.ajax({
        async: true,
        type: "GET",
         url: "index.php?c=tienda&a=header", 
         success: function(data){
         $('#header').html(data);
         }
     });

});