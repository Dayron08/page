$(document).ready(function () {
    $("#btn_singUp").click(function (e) { 
        // alert("Entrooo")
        e.preventDefault();
        var txt_user_id = $("#txt_user_id").val();
        var txt_name = $("#txt_name").val();
        var txt_surname = $("#txt_surname").val();
        var txt_password = $("#txt_password").val();
        
        $.ajax({
            url: "../Controllers/singUp.php",
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