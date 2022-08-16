$(document).ready(function(e){ 

 
    // lectura todos los productos
     var url = "../../../Controllers/call_home.php";
     $.getJSON(url, function(datos){
 
         $.each(datos, function(i, images){
            
            var tr = 
            
            "<img src=\"../../img/church/image_01.jpg\" class=\"img\" alt=\"Image\"/>";
             $(tr).appendTo("#tbodyimg");   
                                                  
         });
 
     }); 

 });