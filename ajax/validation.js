function register(){

    alert('essss')
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

    return true;
    
}