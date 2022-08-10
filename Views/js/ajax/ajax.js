$(document).ready(function () {

    // $("#btn_singUp").prop('disabled',true);

        $("#btn_singUp").click(function (e) { 

            e.preventDefault();
    
            var txt_user_id=$("#txt_user_id").val();
            if(txt_user_id == '' ){
                $("#alert_id").text("✘ Espacio obligatorio");
                $("#alert_id").css({"color" : "red","font-family": "Times New Roman', Times, serif;"});
                return false;
            }else if(isNaN(txt_user_id)){
                $("#alert_id").text("✘ No se permiten letras");
                $("#alert_id").css({"color" : "red","font-family": "Times New Roman', Times, serif;"});
                return false;
            }else if(txt_user_id.length != 9){
                $("#alert_id").text("✘ Número de Cedula no valido");
                $("#alert_id").css({"color" : "red","font-family": "Times New Roman', Times, serif;"});
                return false;
            }else{
                $("#alert_id").text("");
            }
    
            var txt_name = $("#txt_name").val();
            if(txt_name == ''){
                $("#alert_name").text("✘ No se permiten campos vacios");
                $("#alert_name").css({"color" : "red","font-family": "Times New Roman', Times, serif;"});
                return false;
            }else if (!isNaN(txt_name)){
                $("#alert_name").text("✘ No se permiten números");
                $("#alert_name").css({"color" : "red","font-family": "Times New Roman', Times, serif;"});
                return false;
            }else{
                $("#alert_name").text("");
                
            } 

            var txt_surname = $("#txt_surname").val();
            if(txt_surname == ''){
                $("#alert_surname").text("✘ No se permiten campos vacios");
                $("#alert_surname").css({"color" : "red","font-family": "Times New Roman', Times, serif;"});
                return false;
            }else if (!isNaN(txt_surname)){
                $("#alert_surname").text("✘ No se permiten números");
                $("#alert_surname").css({"color" : "red","font-family": "Times New Roman', Times, serif;"});
                return false;
            }else{
                $("#alert_surname").text("");
                
            }

            var txt_gmail = $("#txt_gmail").val();
            var validacion=/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
            vali= validacion.test(txt_gmail);
            if(vali=='' || vali!=true){
                $("#alert_name").text("✘ No se permiten números");
                $("#alert_name").css({"color" : "red","font-family": "Times New Roman', Times, serif;"});
                return false;
            }else{
                $("#alert_name").text("");
            }



            var txt_password = $("#txt_password").val();
            
            

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