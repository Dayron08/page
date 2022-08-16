$(document).ready(function(e){ 
 
 
    // lectura todos las imagenes
     var url = "../../../Controllers/call_home.php";
     $.getJSON(url, function(datos){
 
         $.each(datos, function(i, images){
            
            var tr = 
                "<div class=\"swiper-slide w-330px h-330px pe-4 d-flex\">"+
                    "<div class=\"card shadow-sm shadow-hover trans-base zoom-bg-img o-hover-all\">"+
                        "<div class=\"card-img bg bg-img\" data-bg-img=\".img\">"+
                            "<img loading=\"lazy\" alt=\"Image\" src=\"../../img/"+images.image+"\" />"+
                            "<div class=\"overlay bg-dark position-absolute o-25 o-50-hover\"></div>"+
                        "</div>"+ 
                    "</div>"+
                "</div>";

            //     "<div class=\"swiper-slide w-330px h-330px pe-4 d-flex\">"+
            //         "<div class=\"card shadow-sm shadow-hover trans-base zoom-bg-img o-hover-all\">"+
            //             "<div class=\"card-img bg bg-img\" data-bg-img=\".img\">"+
            //                 "<img class=\"img\" alt=\"Image\" src=\"../../img/"+images.image+"\" />"+
            //                 "<div class=\"overlay bg-dark position-absolute o-25 o-50-hover\"></div>"+
            //             "</div>"+ 
            //         "</div>"+
            //   "</div>";
            
           
             $(tr).appendTo("#tbodyimg");   
                                                  
         });
 
     }); 


     // lectura todos los testimonios
     var url = "../../../Controllers/call_testimonials.php";
     $.getJSON(url, function(datos){
 
         $.each(datos, function(i, images){
            
            var tr = 
            "<div class=\"col-12 col-md d-flex align-items-stretch\">"+
                 "<figure class=\"card testimonial h-100 text-start bg-transparent mb-0\">"+
                    "<blockquote class=\" cardsbg blockquote card-body shadow-sm rounded d-flex flex-column px-lg-5\">"+
                        "<p class=\"fs-1 text-secondary o-25 mb-0\"><i class=\"fas fa-quote-right\"></i></p>"+
                        "<p class=\"fs-6\">La Hermana Arredondo testifica cómo conoció la Iglesia y cómo ésta le ha ayudado en su vida. Ella sabe que ha sido guiada por el Espíritu</p>"+
                       "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\"> John Doe</span> - IT Profesional</p>"+
                        "<div class=\"img px-3 px-lg-4\">"+
                            "<img src=\"\" />"+
                        "</div>"+
                    "</blockquote>"+
                 "</figure>"+
             "</div>";

           
             $(tr).appendTo("#tbodytestimonials");   
                                                  
         });
 
     }); 

 });

 