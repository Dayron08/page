$(document).ready(function () {

    // $("#btn_singUp").prop('disabled',true);

        $("#btn_singUp").click(function (e) { 

            e.preventDefault();
    
            var txt_user_id=$("txt_user_id").val();
            if(txt_user_id == 0 ){
                $("#alert_id").text("No se permiten campos vacios");
                $("#alert_id").css({"background-color":"#F38B77","font-family": "Times New Roman', Times, serif;"})
                return false;          
            }else if(!isNaN(txt_user_id)) {
                $("#alert_id").text("No se permiten letras");
                $("#alert_id").css({"background-color":"#F38B77","font-family": "Times New Roman', Times, serif;"})
                return false;
            }else if(!txt_user_id.lenght==9){
                $("#alert_id").text("Número de Cedula no valido");
                $("#alert_id").css({"background-color":"#F38B77","font-family": "Times New Roman', Times, serif;"})
                return false;
            }else{
                return true;
            }
            
            
            // var txt_user_id = $("#txt_user_id").val();
            // if(txt_user_id == 0 ){
            
            //     alert("Debe ingresar la cedula");
            //     return false;
            // }else if(txt_user_id.length != 9){
        
            //     alert("El formato de cedula no es correcto");
            //     return false;
            // }
    
            var txt_name = $("#txt_name").val();
            if(txt_name==0){
                alert("El nombre esta vacio");
                return false;
            }
    
            var txt_surname = $("#txt_surname").val();
            if(txt_surname==0){
                alert("El apellido esta vacio");
                return false;
            }
    
            var txt_password = $("#txt_password").val();
            if(txt_password==0){
                alert("La contraseña esta vacia");
                return false;
            }
            
    
            var txt_gmail = $("#txt_gmail").val();
          
    
            $.ajax({
                url: "../../../Controllers/singUp.php",
                method: "POST",
                data : {txt_user_id : txt_user_id, txt_name : txt_name, txt_surname : txt_surname, txt_password : txt_password, txt_gmail : txt_gmail},
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
    
    



    
//login

    $("#btn_entrar").click(function(e){

        e.preventDefault();

        var txt_email = $("#txt_email").val();
        var txt_pass = $("#txt_pass").val();

        $.ajax({
            url: "../../../Controllers/validateLogin.php",
            method: "POST",
            data:{txt_email: txt_email, txt_pass: txt_pass},
            success: function(dataresponse, statustext, response){
                if(statustext == "success"){
                    $("#respuesta").html(dataresponse);

                // alert(dataresponse);
                    //alert(dataresponse);
                    if(dataresponse == 0){
                        alert(ad);
                        location.href="../../Views/Perfil/User/home.php";
                    }else if(dataresponse == 1){
                        alert(us);
                        location.href="../../Views/Perfil/Admin/home.php";
                    }else if (dataresponse == 2){
                                             
                        alert("Usuario incorrecto");
                    }


                }
            },

            error: function(request, errorcode, errortext){
                $("#respuesta").html(errorcode);
            }


        });

    });



});