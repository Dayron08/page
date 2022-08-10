addEventListener("load",hola);

function hola(){
    var email = "ran@676gmail.com";
    var password = "X!J_gD27";
    alert("estoy en succes")
    $.ajax({
        
        method : "POST",
        data : {email : email, password : password},
        url: "../../../Controllers/json/call_profile.php",
        success: function (dataresponse) {
            var url = "../../../Controllers/json/data_profile.json";
            
            $.getJSON(url, function (data) {
                $.each(data, function (i, data_json) {
                    // alert(cod_persona+"-"+num_ide+"-"+name+"-"+last_names)
                    $.ajax({
                        method : "POST",
                        url: "../../Perfil/Admin/my_profile.php",
                        data:
                        {
                            FOTO_PERFIL : data.FOTO_PERFIL,
                            NOMBRE : data.NOMBRE,
                            APPELLIDOS : data.APPELLIDOS,
                            FECH_NACIMIENTO : data.FECH_NACIMIENTO,
                            GENERO : data.GENERO,
                            EMAIL : data.EMAIL,
                            TELEFONO : data.TELEFONO,
                            PASSWORD_PERSONA : data.PASSWORD_PERSONA
                        },
                        success: function (response) {
                            $("#frm_rent").html(response);
                        }
                    });
                });
            });
        }
    });
}