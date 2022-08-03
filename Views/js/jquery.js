

$(document).ready(function(){ 
    e.preventDefault()

    $("#btn_singUp").click(function(e){

  
        var id = $("#id").val();
        var name = $("#name").val();
        var lastname = $("#lastname").val();
        var gmail = $("#gmail").val();
        var password = $("#password").val();
    
        // alert(id)
        // alert(name)
        // alert(lastname)
        // alert(password)
       
    
    
        $.ajax({
            url: "insert.php",
            method: "POST",
            data:{id: id, name: name, lastname: lastname, gmail: gmail, password: password},
            success: function(dataresponse, statustext, response){
    
    
            },
            error: function(request, errorcode, errortext){
                $("#respuesta").html(errorcode);
            }
      
    
        
        });
    
    }
    
    

});




