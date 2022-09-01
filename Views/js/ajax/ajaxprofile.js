$("#btn_profile").click(function(e) {
        
    var id= "30528745";

   alert(id)
    
    $.ajax({
                url: "../../../Controllers/get_profile.php",
                method: "POST",
                data: { id: id },
                success: function(dataresponse, statustext, response) {
                    //console.log(response)
                    if (statustext == "success") {
                        $("#respuesta").html(dataresponse);
                       
                    } //termina if
                },
                error: function(request, errorcode, errortext) {
                    $("#respuesta").html(errorcode);
                }
        
    });

});

