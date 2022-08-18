$(document).ready(function(e){ 
 
 
    // lectura todos las imagenes
     var url = "../../../Controllers/call_imagesHome.php";
     $.getJSON(url, function(datos){
  
         $.each(datos, function(i, images){
              
            var tr = 
                "<div class=\"swiper-slide w-330px h-330px pe-4 d-flex\">"+
                    "<div class=\"card shadow-sm shadow-hover trans-base zoom-bg-img o-hover-all\">"+
                        "<div class=\"card-img bg bg-img\" data-bg-img=\".img\">"+
                            "<img alt=\"Image\" src=\"../../img/"+images.image+"\" />"+
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


    //  // lectura testimonios en home 
     var url = "../../../Controllers/call_testimonialsHome.php";
     $.getJSON(url, function(dato){
 
         $.each(dato, function(i, testimonial){
            
            var t = 
            "<div class=\"col-12 col-md d-flex align-items-stretch\">"+
                "<figure class=\"card testimonial h-100 text-start bg-transparent mb-0\">"+
                    "<blockquote class=\" cardsbg blockquote card-body shadow-sm rounded d-flex flex-column px-lg-5\">"+
                        "<p class=\"fs-1 text-secondary o-25 mb-0\"><i class=\"fas fa-quote-right\"></i></p>"+
                        "<p class=\"fs-6\">"+testimonial.dsc+"</p>"+
                        "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">"+
                            "&mdash;<span class=\"fw-bold\">"+testimonial.name+" </span> "+testimonial.lastname+"</p>"+
                    "</blockquote>"+
                "</figure>"+
          "</div>";
            
           
             $(t).appendTo("#tbodytestimonial");   
                                                  
         });
 
     }); 


       // lectura para todos los testimonios 
       var url = "../../../Controllers/call_testimonials.php";
       $.getJSON(url, function(dato){
   
           $.each(dato, function(i, testimonials){
              
              var t = 
              "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">"+
                "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">"+
                    "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">"+
                        "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>"+
                        "<input type=\"checkbox\" id=\"check\" >"+
                        "<p class=\"fs-1 text-secondary o-25 mb-0\"><i class=\"fas fa-quote-right\"></i></p>"+
                        "<p class=\"fs-6\">"+testimonials.dsc+"</p>"+
                       "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">-"+testimonials.name+"</span> "+testimonials.lastname+"</p>"+
                        "<div class=\"img px-3 px-lg-4\">"+
                            "<img loading=\"lazy\" src=\"http://assets.coolorize.com/avatar/256x256/ariel-lustre-368240.jpg\" class=\"img rounded-circle\" alt=\"Image\" />"+
                        "</div>"+
                    "</blockquote>"+
                "</figure>"+
            "</div>";
              
             
               $(t).appendTo("#bodytestimonial");   
                                                    
           });
   
       }); 

         // lectura para todos las consultas
         var url = "../../../Controllers/call_consul.php";
         $.getJSON(url, function(dato){
     
             $.each(dato, function(i, consul){
                
                var t = 
                "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">"+
                  "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">"+
                      "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">"+
                          "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>"+
                          "<input type=\"checkbox\" id=\"check\" >"+
                          "<p class=\"fs-1 text-secondary o-25 mb-0\">"+consul.subject+"</p>"+
                          "<p class=\"fs-6\">"+consul.consul+"</p>"+
                         "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">"+consul.name+"</span>  -"+consul.gmail+"</p>"+
                        "</blockquote>"+
                  "</figure>"+
              "</div>";

                 $(t).appendTo("#bodyconsul");   
                                                      
             });
     
         }); 

        // lectura para todos los testimonios User
        var url = "../../../Controllers/call_testimonials.php";
        $.getJSON(url, function(dato){

            $.each(dato, function(i, testimonials){
                
                var t = 
                "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">"+
                "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">"+
                    "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">"+
                        "<p class=\"fs-1 text-secondary o-25 mb-0\"><i class=\"fas fa-quote-right\"></i></p>"+
                        "<p class=\"fs-6\">"+testimonials.dsc+"</p>"+
                        "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">-"+testimonials.name+"</span> "+testimonials.lastname+"</p>"+
                        "<div class=\"img px-3 px-lg-4\">"+
                            "<img loading=\"lazy\" src=\"http://assets.coolorize.com/avatar/256x256/ariel-lustre-368240.jpg\" class=\"img rounded-circle\" alt=\"Image\" />"+
                        "</div>"+
                    "</blockquote>"+
                "</figure>"+
            "</div>";
                
            
                $(t).appendTo("#bodytestimonialUser");   
                                                    
            });

        }); 
       

         // lectura para todos los eventos admin
         var url = "../../../Controllers/call_events.php";
         $.getJSON(url, function(dato){
 
             $.each(dato, function(i, events){
                 
                 var t = 
                    "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">"+
                        "<div class=\"card\" style=\"width: 18rem;\">"+
                            "<img style=\"width: 289px; height: 200px;\" src=\"../../img/"+events.img+"\" class=\"card-img-top\" alt=\"...\">"+
                            "<div class=\"card-body\">"+
                                "<h5 class=\"card-title\">"+events.nameEvent+"</h5>"+
                                "<div class=\"card-footer bg-transparent fs-sm\"><span class=\"o-50\"> Por </span> <a "+
                                                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\">"+events.name+"</a><br> <span"+
                                                "class=\"o-50\"> Fecha: </span>"+events.date+"<a href=\"\""+
                                                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a>"+
                                "</div>"+
                                "<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">"+
                                        "<button class=\"btn btn-link me-md-1 mr-1\" type=\"button\"><a id=\"\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>"+
                                        "<button class=\"btn btn-link\" type=\"button\"><a data-bs-toggle=\"modal\" data-bs-target=\"#new_event\" id=\"\" class=\"fa fa-pen fa-lg\" href=\"#\"></a></button>"+
                                "</div>"+   
                            "</div>"+
                        "</div>"+
                    "</div>";

             
                 $(t).appendTo("#bodyEvents");   
                                                     
             }); 
 
         }); 


            // lectura para todos los eventos admin
            var url = "../../../Controllers/call_eventsUsers.php";
            $.getJSON(url, function(dato){
    
                $.each(dato, function(i, events){
                    
                    var t = 
                       "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">"+
                           "<div class=\"card\" style=\"width: 18rem;\">"+
                               "<img style=\"width: 289px; height: 200px;\" src=\"../../img/"+events.img+"\" class=\"card-img-top\" alt=\"...\">"+
                               "<div class=\"card-body\">"+
                                   "<h5 class=\"card-title\">"+events.nameEvent+"</h5>"+
                                   "<div class=\"card-footer bg-transparent fs-sm\"><span class=\"o-50\"> Por </span> <a "+
                                                   "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\">"+events.name+"</a><br> <span"+
                                                   "class=\"o-50\"> Fecha: </span>"+events.date+"<a href=\"\""+
                                                   "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a>"+
                                   "</div>"+  
                               "</div>"+
                           "</div>"+
                       "</div>";
   
                
                    $(t).appendTo("#bodyEventsUser");   
                                                        
                }); 
    
            }); 

        $("#btn_query").click(function (e) {

            var txt_names = $("#txt_names").val();
            var txt_lastnames = $("#txt_lastnames").val();
            var txt_gmail = $("#txt_gmail").val();
            var txt_subject = $("#txt_subject").val();
            var txt_text = $("#txt_text").val();
                
            $.ajax({
                url: "../../../Controllers/insertQuery.php",
                method: "POST",
                data : {txt_names : txt_names, txt_lastnames : txt_lastnames, txt_gmail : txt_gmail, txt_subject : txt_subject, txt_text : txt_text},
                success: function(dataresponse, statustext, response){
                    if(statustext == "success"){
                        console.log("exitosamente")


                    }
                },
                error: function(request, errorcode, errortext){
                    console.log("errorrrrrr")

                }
            });

        });


        $("#btn_testimony").click(function (e) {

            e.preventDefault();

            var txt_testimony = $("#txt_testimony").val();
            var txt_person = "30528745";

                
            $.ajax({
                url: "../../../Controllers/insertTestimony.php",
                method: "POST", 
                data : {txt_testimony : txt_testimony, txt_person : txt_person},
                success: function(dataresponse, statustext, response){
                    if(statustext == "success"){
                        console.log("exitosamente")


                    }
                },
                error: function(request, errorcode, errortext){
                    console.log("errorrrrrr")

                }
            });

        });






 });

 