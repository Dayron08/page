function llamar_datos(){
    $("#tabla tbody").html("");
    var url = "llamar_datos.php";
    $.getJSON(url, function(data){
        $.each(data, function (i, datos) { 
            var tr = 
            "<tr>"+
                // "<td>"+datos.IDE_REGISTRO+"</td>"+
                "<td>"+datos.TIP_IDENTIFICACION+"</td>"+
                "<td>"+datos.NUM_IDENTIFICACION+"</td>"+
                "<td>"+datos.DSC_NOMBRE+"</td>"+
                "<td>"+datos.DSC_APELLIDOS+"</td>"+
                "<td>"+datos.IND_SEXO+"</td>"+
                "<td>"+datos.FEC_NACIMIENTO+"</td>"+
                "<td>"+datos.DSC_LUGAR+"</td>"+
                "<td>"+datos.DSC_NACIONALIDAD+"</td>"+
                "<td>"+datos.IND_ESTADO+"</td>"+
                "<td>"+datos.DSC_TELEFONO+"</td>"+
                "<td>"+datos.DSC_EMAIL+"</td>"+
                "<td>"+datos.IND_ESTADO+"</td>"+
                "<td>"+datos.DSC_DOMICILIO+"</td>"+
                "<td><button class=\"btn btn-danger\" id=\"btn_eliminar\"onclick=\"eliminar('"+datos.NUM_IDENTIFICACION+"')\"type=\"submit\">Borrar</button></td>"+
            "</tr>";  
            $(tr).appendTo("#tabla tbody");
        });
    });
}

function eliminar(txt_id){
    // alert("Entroo")
    // alert("hola")
    $.ajax({
        url: "eliminar.php",
        method: "POST",
        data: {txt_id: txt_id},
        success: function(dataresponse, statustext, response){
            //console.log(response)
            if(statustext == "success"){
                $("#lb_mensaje").html(dataresponse);
                $("#tabla tbody").html("");
            }
        },
        error: function(request, errorcode, errortext){
            $("#lb_mensaje").html(errorcode);
        }
    });
}