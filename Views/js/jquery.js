$(document).ready(function(){ 

    $("#btn_reguistrarse").click(function(e){
        e.preventDefault();

        var id = $("#id").val();
        
        var name = $("#name").val();
        var lastname = $("#lastname").val();
        var gmail = $("#gmail").val();
        var password = $("#password").val();


        $.ajax({
            url: "../Models/insert.php",
            method: "POST",
            data:{id: id, name: name, lastname: lastname, gmail: gmail, password: password},
            success: function(dataresponse, statustext, response){


            },
            error: function(request, errorcode, errortext){
                $("#respuesta").html(errorcode);
            }
      

        
        });



    });



});