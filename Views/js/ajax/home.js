$(document).ready(function(e){ 

 
    // lectura todos los productos
     var url = "../../../Controllers/call_home.php";
     $.getJSON(url, function(datos){
 
         $.each(datos, function(i, images){
            
            var tr = 
            "<p class=\"leadmb-0 o-75\">Conoce nuestra Iglesia</p>"+
            " <div class=\"col-3\">"+
            " <div class=\"card\">"+
            "<img height=\"200\" src=\"../../css/images/"+images.image+"\">"+
                "<div class=\"card-body\">"+
                " <h5 class=\"card-title\">"+products.name+"</h5>"+
                "<p class=\"card-text\"style=\"color: crimson;\">$"+products.price+"</p>"+
                "<p class=\"card-text\">"+products.status+"</p>"+
                "<a class=\"btn \" id=\"btn_add\"onclick=\"addProduct('"+products.id+"','"+products.name+"','"+products.price+"','"+products.status+"','"+products.picture+"')\" ><img src=\"../../css/images/carrent.png\" width=\"35px\" height=\"35px\"></a>"+
                "</div>"+
                "</div>"; 
    
             $(tr).appendTo("#tbody");   
                                                  
         });
 
     }); 

 });