$(document).ready(function () {
    $("#btn_singUp").click(function (e) { 

        
        var txt_user_id = $("#txt_user_id").val();
        if(txt_user_id == 0 ){
        
            alert("Debe ingresar la cedula");
            return false;
        }else if(txt_user_id.length != 9){
    
            alert("El formato de cedula no es correcto");
            return false;
        }

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
        
        $.ajax({
            url: "../../../Controllers/singUp.php",
            method: "POST",
            data : {txt_user_id : txt_user_id, txt_name : txt_name, txt_surname : txt_surname, txt_password : txt_password},
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