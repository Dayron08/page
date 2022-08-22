$(document).ready(function (e) {


    // lectura todos las imagenes
    var url = "Controllers/call_imagesHome.php";
    $.getJSON(url, function (datos) {

        $.each(datos, function (i, images) {

            var tr =
                "<div class=\"swiper-slide w-330px h-330px pe-4 d-flex\">" +
                "<div class=\"card shadow-sm shadow-hover trans-base zoom-bg-img o-hover-all\">" +
                "<div class=\"card-img bg bg-img\" data-bg-img=\".img\">" +
                "<img alt=\"Image\" src=\"../../img/" + images.image + "\" />" +
                "<div class=\"overlay bg-dark position-absolute o-25 o-50-hover\"></div>" +
                "</div>" +
                "</div>" +
                "</div>";

            //     "<div class=\"swiper-slide w-330px h-330px pe-4 d-flex\">"+
            //         "<div class=\"card shadow-sm shadow-hover trans-base zoom-bg-img o-hover-all\">"+
            //             "<div class=\"card-img bg bg-img\" data-bg-img=\".img\">"+
            //                 "<img class=\"img\" alt=\"Image\" src=\"../../img/"+images.image+"\" />"+
            //                 "<div class=\"overlay bg-dark position-absolute o-25 o-50-hover\"></div>"+
            //             "</div>"+ 
            //         "</div>"+
            //   "</div>";


            $(tr).appendTo("#tbodyimg");

        });

    });


    //  // lectura testimonios en home 
    var url = "Controllers/call_testimonialsHome.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, testimonial) {

            var t =
                "<div class=\"col-12 col-md d-flex align-items-stretch\">" +
                "<figure class=\"card testimonial h-100 text-start bg-transparent mb-0\">" +
                "<blockquote class=\" cardsbg blockquote card-body shadow-sm rounded d-flex flex-column px-lg-5\">" +
                "<p class=\"fs-1 text-secondary o-25 mb-0\"><i class=\"fas fa-quote-right\"></i></p>" +
                "<p class=\"fs-6\">" + testimonial.dsc + "</p>" +
                "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">" +
                "&mdash;<span class=\"fw-bold\">" + testimonial.name + " </span> " + testimonial.lastname + "</p>" +
                "</blockquote>" +
                "</figure>" +
                "</div>";


            $(t).appendTo("#tbodytestimonial");

        });

    });


    // lectura para todos los testimonios 
    var url = "Controllers/call_testimonials.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, testimonials) {

            var t =
                "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
                "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
                "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
                "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                "<input type=\"checkbox\" id=\"check\" >" +
                "<p class=\"fs-1 text-secondary o-25 mb-0\"><i class=\"fas fa-quote-right\"></i></p>" +
                "<p class=\"fs-6\">" + testimonials.dsc + "</p>" +
                "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">-" + testimonials.name + "</span> " + testimonials.lastname + "</p>" +
                "<div class=\"img px-3 px-lg-4\">" +
                "<img loading=\"lazy\" src=\"http://assets.coolorize.com/avatar/256x256/ariel-lustre-368240.jpg\" class=\"img rounded-circle\" alt=\"Image\" />" +
                "</div>" +
                "</blockquote>" +
                "</figure>" +
                "</div>";


            $(t).appendTo("#bodytestimonial");

        });

    });

    // lectura para todos las videostas
    // var url = "Controllers/call_videos.php";
    // $.getJSON(url, function (dato) {

    //     $.each(dato, function (i, videos) {

    //         var t =
    //             "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
    //             "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
    //             "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
    //             "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
    //             "<input type=\"checkbox\" id=\"check\" >" +
    //             "<p class=\"fs-1 text-secondary o-25 mb-0\">" + videos.subject + "</p>" +
    //             "<p class=\"fs-6\">" + videos.videos + "</p>" +
    //             "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">" + videos.name + "</span>  -" + videos.gmail + "</p>" +
    //             "</blockquote>" +
    //             "</figure>" +
    //             "</div>";

    //         $(t).appendTo("#bodyvideos");

    //     });

    // });

    // lectura para todos los testimonios User
    var url = "Controllers/call_testimonials.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, testimonials) {

            var t =
                "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
                "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
                "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
                "<p class=\"fs-1 text-secondary o-25 mb-0\"><i class=\"fas fa-quote-right\"></i></p>" +
                "<p class=\"fs-6\">" + testimonials.dsc + "</p>" +
                "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">-" + testimonials.name + "</span> " + testimonials.lastname + "</p>" +
                "<div class=\"img px-3 px-lg-4\">" +
                "<img loading=\"lazy\" src=\"http://assets.coolorize.com/avatar/256x256/ariel-lustre-368240.jpg\" class=\"img rounded-circle\" alt=\"Image\" />" +
                "</div>" +
                "</blockquote>" +
                "</figure>" +
                "</div>";


            $(t).appendTo("#bodytestimonialUser");

        });

    });


    // this is to see videos
    var url = "Controllers/call_videos.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, videos) {

            var v =

                "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch\">" +

                "<div class=\"card-body bg-white shadow-sm rounded d-flex flex-column px-lg-10\">" +
                "<input type=\"checkbox\" id = \"checkbox_videos\">" +
                "<iframe class=\"w - 100\" src = \"https://www.youtube.com/embed/" + videos.url + "\" title = \"YouTube video player\"frameborder = \"0\"allow = \"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"allowfullscreen ></iframe > " +

                "</div >" +

                "</div >";


            $(v).appendTo("#all_videos");

        });

    });




    $("#btn_query").click(function (e) {

        var txt_names = $("#txt_names").val();
        var txt_lastnames = $("#txt_lastnames").val();
        var txt_gmail = $("#txt_gmail").val();
        var txt_subject = $("#txt_subject").val();
        var txt_text = $("#txt_text").val();

        $.ajax({
            url: "Controllers/insertQuery.php",
            method: "POST",
            data: { txt_names: txt_names, txt_lastnames: txt_lastnames, txt_gmail: txt_gmail, txt_subject: txt_subject, txt_text: txt_text },
            success: function (dataresponse, statustext, response) {
                if (statustext == "success") {
                    console.log("exitosamente")


                }
            },
            error: function (request, errorcode, errortext) {
                console.log("errorrrrrr")

            }
        });

    });


    $("#btn_testimony").click(function (e) {

        e.preventDefault();

        var txt_testimony = $("#txt_testimony").val();
        var txt_person = "30528745";


        $.ajax({
            url: "Controllers/insertTestimony.php",
            method: "POST",
            data: { txt_testimony: txt_testimony, txt_person: txt_person },
            success: function (dataresponse, statustext, response) {
                if (statustext == "success") {
                    console.log("exitosamente")


                }
            },
            error: function (request, errorcode, errortext) {
                console.log("errorrrrrr")

            }
        });

    });



    $("#btn_entrar").click(function (e) {
        // var data;

        //   e.preventDefault();

        var txt_email = $("#txt_email").val();
        var validacion = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
        vali = validacion.test(txt_email);
        if (vali == '' || vali != true) {
            $("#alert_emaill").text("✘ Formato no valido");
            $("#alert_emaill").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else {
            $("#alert_emaill").text("");
            var txt_pass = $("#txt_pass").val();
            if (txt_pass == '') {
                $("#alert_passwordd").text("✘ No se permiten campos vacios");
                $("#alert_passwordd").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                return false;
            } else if (txt_pass.length < 8) {
                $("#alert_passwordd").text("✘ La contraseña debe de tener al menos 8 caracteres");
                $("#alert_passwordd").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                return false;
            } else {
                $("#alert_passwordd").text("");
            }

        }


        $.ajax({
            url: "Controllers/validateLogin.php",
            method: "POST",
            data: { txt_email: txt_email, txt_pass: txt_pass },

            success: function (dataresponse, statustext, response) {
                if (statustext == "success") {
                    $("#respuesta").html(dataresponse);

                    if (dataresponse == 0) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Iniciando Sesion',
                            showConfirmButton: false,
                            timer: 400
                        })
                        location.href = "index.php?access=U-101";

                    } else if (dataresponse == 1) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Iniciando Sesion',
                            showConfirmButton: false,
                            timer: 400
                        })
                        location.href = "index.php?access=A-201";
                    } else if (dataresponse == 2 || dataresponse == null) {
                        alert("Datos no encontrados");
                        location.href = "#";
                    }
                    // data = dataresponse;
                }
            },

            error: function (request, errorcode, errortext) {
                $("#respuesta").html(errorcode);
            }


        });

    });
    //view profile
    $("#view_profile").click(function (e) {
        // alert("estoy aqui");
        var url = "../json/id_perfil.json";
        // alert(url);
        $.getJSON(url, function (data) {
            $.each(data, function (i, data_profile) {
                // alert(cod_persona+"-"+num_ide+"-"+name+"-"+last_names)
                // console.log(data_profile);
                $.ajax({
                    method: "POST",
                    url: "Controllers/view_profile.php",

                    data:
                    {
                        id_profile: data.id
                    },
                    success: function (response) {
                        var p =
                            "<dl class=\"col-6 col - lg - 4 my - 0\">" +
                            "< dt class=\"fw-normal fs-sm text-uppercase text-secondary\" > N & uacute;mero de identificaci & oacute;n</dt >" +
                            "<input type=\"text\" class=\"form-control shadow-none mt-3 mb-3\" value=" + data_profile.NUM_IDE + ">" +
                            "</dl>" +
                            "<dl class=\"col-6 col-lg-4 my-0\">" +
                            "<dt class=\"fw-normal fs-sm text-uppercase text-secondary\">Nombre</dt>" +
                            "<input type=\"text\" class=\"form-control shadow-none mt-3 mb-3\" value=" + data_profile.NOMBRE + ">" +
                            "</dl>" +
                            "<dl class=\"col-6 col-lg-4 my-0\">" +
                            "<dt class=\"fw-normal fs-sm text-uppercase text-secondary\">Apellidos</dt>" +
                            "<input type=\"text\" class=\"form-control shadow-none mt-3 mb-3\" value=" + data_profile.APPELLIDOS + ">" +
                            "</dl>" +
                            "<dl class=\"col-6 col-lg-4 my-0\">" +
                            "<dt class=\"fw-normal fs-sm text-uppercase text-secondary\">Fecha de nacimiento</dt>" +
                            "<input type=\"text\" class=\"form-control shadow-none mt-3 mb-3\" value=" + data_profile.FECH_NACIMIENTO + ">" +
                            "</dl>" +
                            "<dl class=\"col-6 col-lg-4 my-0\">" +
                            "<dt class=\"fw-normal fs-sm text-uppercase text-secondary\">G&eacute;nero</dt>" +
                            "<input type=\"text\" class=\"form-control shadow-none mt-3 mb-3\" value=" + data_profile.GENERO + ">" +
                            "</dl>";

                        var pc =
                            "<dl class=\"col-6 col - lg - 4 my - 0\">" +
                            "< dt class=\"fw-normal fs-sm text-uppercase text-secondary\" >Correo</dt >" +
                            "<input type=\"text\" class=\"form-control shadow-none mt-3 mb-3\" value=" + data_profile.EMAIL + ">" +
                            "</dl>" +
                            "<dl class=\"col-6 col-lg-4 my-0\">" +
                            "<dt class=\"fw-normal fs-sm text-uppercase text-secondary\">Tel&eacute;fono</dt>" +
                            "<input type=\"text\" class=\"form-control shadow-none mt-3 mb-3\" value=" + data_profile.TELEFONO + ">" +
                            "</dl>";

                        var img_url =
                            "<img loading=\"lazy\" src=" + data_profile.FOTO_PERFIL + " class=\"w-100\" alt=\"Image\" style=\"border-radius: 45%; width: 100%; height : 200px; \" />";
                        $(p).appendTo("#personal_data");
                        $(pc).appendTo("#personal_contact_data");
                        $(img_url).appendTo("#url_image");

                    }
                });
            });
        });



    });




});

