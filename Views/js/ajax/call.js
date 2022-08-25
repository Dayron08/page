$(document).ready(function () {

    // update
    $.getJSON("../../js/json/Event.json", function (data) {
        $.each(data, function (i, event) {

            $("#txt_Id").val(event.id);
            $("#txt_Name").val(event.name);
            $("#txt_Eventname").val(event.nameEvent);
            $("#txt_Desc").val(event.dsc);
            $("#txt_Eventdate").val(event.date);
            $("#txt_Eventtime").val(event.time);
            $("#txt_Eventimg").val(event.img);


        });

    });

    // lectura todos las imagenes home
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



            $(tr).appendTo("#tbodyimg");

        });

    });

    // lectura todos las imagenes Admin Pueblo
    var url = "Controllers/call_imagesTown.php";
    $.getJSON(url, function (datos) {

        $.each(datos, function (i, imagesTown) {

            var tr =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card-body bg-white shadow-sm rounded d-flex flex-column px-lg-10\">" +
                "<div class=\"card-img-top overflow-hidden position-relative\">" +
                "<input type=\"checkbox\" id=\"checkbox_images\">" +
                "<img loading=\"lazy\" src=\"../../img/church/" + imagesTown.image + "\" class=\"w-100\" alt=\"Image\"" +
                "style=\"width: 100%; height : 250px;\" />" +
                "</div>" +
                "</div>" +
                "</div>";


            $(tr).appendTo("#bodyimgtown");

        });

    });



    // lectura todos las imagenes Admin Ni;os
    var url = "Controllers/call_imagesChildren.php";
    $.getJSON(url, function (datos) {

        $.each(datos, function (i, imagesChildren) {

            var tr =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card-body bg-white shadow-sm rounded d-flex flex-column px-lg-10\">" +
                "<div class=\"card-img-top overflow-hidden position-relative\">" +
                "<input type=\"checkbox\" id=\"checkbox_images\">" +
                "<img loading=\"lazy\" src=\"../../img/children/" + imagesChildren.image + "\"  class=\"w-100\" alt=\"Image\"" +
                "style=\"width: 100%; height : 250px;\" />" +
                "</div>" +
                "</div>" +
                "</div>";


            $(tr).appendTo("#bodyimgChildren");

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
                "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" onclick=\"deleteTestimonial('" + testimonials.idTesti + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
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

    // lectura para todos las consultas
    var url = "Controllers/call_consul.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, consul) {

            var t =
                "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
                "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
                "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
                "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" onclick=\"deleteConsul('" + consul.id + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                "<input type=\"checkbox\" id=\"check\" >" +
                "<p class=\"fs-1 text-secondary o-25 mb-0\">" + consul.subject + "</p>" +
                "<p class=\"fs-6\">" + consul.consul + "</p>" +
                "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">" + consul.name + "</span>  -" + consul.gmail + "</p>" +
                "</blockquote>" +
                "</figure>" +
                "</div>";

            $(t).appendTo("#bodyconsul");

        });

    });


    // lectura para todos los eventos admin
    var url = "Controllers/call_events.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, events) {

            var t =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card\" style=\"width: 18rem;\">" +
                "<img style=\"width: 289px; height: 200px;\" src=\"../../img/" + events.img + "\" class=\"card-img-top\" alt=\"...\">" +
                "<div class=\"card-body\">" +
                "<h5 class=\"card-title\">" + events.nameEvent + "</h5>" +
                "<div class=\"card-footer bg-transparent fs-sm\"><span class=\"o-50\"> Por </span> <a " +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\">" + events.name + "</a><br> <span" +
                "class=\"o-50\"> Fecha: </span>" + events.date + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a>" +
                "</div>" +
                "<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">" +
                "<button class=\"btn btn-link me-md-1 mr-1\" type=\"button\"><a id=\"btn_delete\" onclick=\"deleteEvent('" + events.id + "')\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                "<button class=\"btn btn-link\" type=\"submit\"><a id=\"btn_update\" onclick=\"getEvent('" + events.id + "')\" class=\"fa fa-pen fa-lg\" href=\"../../Perfil/Admin/eventModel.php\"></a></button>" +
                "</div>" +
                "</div>" +
                "</div>" +
                "</div>";




            $(t).appendTo("#bodyEvents");

        });

    });

    // lectura para todos los eventos admin
    var url = "Controllers/call_eventsUsers.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, events) {

            var t =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card\" style=\"width: 18rem;\">" +
                "<img style=\"width: 289px; height: 200px;\" src=\"../../img/" + events.img + "\" class=\"card-img-top\" alt=\"...\">" +
                "<div class=\"card-body\">" +
                "<h5 class=\"card-title\">" + events.nameEvent + "</h5>" +
                "<div class=\"card-footer bg-transparent fs-sm\"><span class=\"o-50\"> Por </span> <a " +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\">" + events.name + "</a><br> <span" +
                "class=\"o-50\"> Fecha: </span>" + events.date + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a><br><span" +
                "class=\"o-50\"> Hora: </span>" + events.time + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a><br><span" +
                "class=\"o-50\"> Descripcion: </span>" + events.dsc + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a>" +

                "</div>" +
                "</div>" +
                "</div>" +
                "</div>";


            $(t).appendTo("#bodyEventsUser");

        });

    });
    // *********************************JSON OBJETS*************************************************************
    // update
    $.getJSON("../json/Event.json", function (data) {
        $.each(data, function (i, event) {

            $("#txt_Id").val(event.id);
            $("#txt_Name").val(event.name);
            $("#txt_Eventname").val(event.nameEvent);
            $("#txt_Desc").val(event.dsc);
            $("#txt_Eventdate").val(event.date);
            $("#txt_Eventtime").val(event.time);
            $("#txt_Eventimg").val(event.img);


        });

    });

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


    // lectura todos las imagenes Admin Jovenes
    var url = "Controllers/call_imagesYoung.php";
    $.getJSON(url, function (datos) {

        $.each(datos, function (i, imagesYoung) {

            var tr =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card-body bg-white shadow-sm rounded d-flex flex-column px-lg-10\">" +
                "<div class=\"card-img-top overflow-hidden position-relative\">" +
                "<input type=\"checkbox\" id=\"checkbox_images\">" +
                "<img loading=\"lazy\" src=\"../../img/young_people/" + imagesYoung.image + "\"  class=\"w-100\" alt=\"Image\"" +
                "style=\"width: 100%; height : 250px;\" />" +
                "</div>" +
                "</div>" +
                "</div>";


            $(tr).appendTo("#bodyimgyoung");

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
                "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" onclick=\"deleteTestimonial('" + testimonials.idTesti + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
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

    // lectura para todos las consultas
    var url = "Controllers/call_consul.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, consul) {

            var t =
                "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
                "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
                "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
                "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" onclick=\"deleteConsul('" + consul.id + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                "<input type=\"checkbox\" id=\"check\" >" +
                "<p class=\"fs-1 text-secondary o-25 mb-0\">" + consul.subject + "</p>" +
                "<p class=\"fs-6\">" + consul.consul + "</p>" +
                "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">" + consul.name + "</span>  -" + consul.gmail + "</p>" +
                "</blockquote>" +
                "</figure>" +
                "</div>";

            $(t).appendTo("#bodyconsul");

        });

    });

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

    // lectura para todos los eventos admin
    var url = "Controllers/call_events.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, events) {

            var t =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card\" style=\"width: 18rem;\">" +
                "<img style=\"width: 289px; height: 200px;\" src=\"../../img/" + events.img + "\" class=\"card-img-top\" alt=\"...\">" +
                "<div class=\"card-body\">" +
                "<h5 class=\"card-title\">" + events.nameEvent + "</h5>" +
                "<div class=\"card-footer bg-transparent fs-sm\"><span class=\"o-50\"> Por </span> <a " +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\">" + events.name + "</a><br> <span" +
                "class=\"o-50\"> Fecha: </span>" + events.date + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a>" +
                "</div>" +
                "<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">" +
                "<button class=\"btn btn-link me-md-1 mr-1\" type=\"button\"><a id=\"btn_delete\" onclick=\"deleteEvent('" + events.id + "')\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                "<button class=\"btn btn-link\" type=\"submit\"><a id=\"btn_update\" onclick=\"getEvent('" + events.id + "')\" class=\"fa fa-pen fa-lg\" href=\"../../Perfil/Admin/eventModel.php\"></a></button>" +
                "</div>" +
                "</div>" +
                "</div>" +
                "</div>";




            $(t).appendTo("#bodyEvents");

        });

    });

    // lectura para todos los eventos admin
    var url = "Controllers/call_eventsUsers.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, events) {

            var t =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card\" style=\"width: 18rem;\">" +
                "<img style=\"width: 289px; height: 200px;\" src=\"../../img/" + events.img + "\" class=\"card-img-top\" alt=\"...\">" +
                "<div class=\"card-body\">" +
                "<h5 class=\"card-title\">" + events.nameEvent + "</h5>" +
                "<div class=\"card-footer bg-transparent fs-sm\"><span class=\"o-50\"> Por </span> <a " +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\">" + events.name + "</a><br> <span" +
                "class=\"o-50\"> Fecha: </span>" + events.date + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a><br><span" +
                "class=\"o-50\"> Hora: </span>" + events.time + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a><br><span" +
                "class=\"o-50\"> Descripcion: </span>" + events.dsc + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a>" +

                "</div>" +
                "</div>" +
                "</div>" +
                "</div>";


            $(t).appendTo("#bodyEventsUser");

        });

    });

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

    // this is to see videos user
    var url = "Controllers/call_videos.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, videos) {

            var v =

                "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch\">" +

                "<div class=\"card-body bg-white shadow-sm rounded d-flex flex-column px-lg-10\">" +
                "<iframe class=\"w - 100\" src = \"https://www.youtube.com/embed/" + videos.url + "\" title = \"YouTube video player\"frameborder = \"0\"allow = \"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"allowfullscreen ></iframe > " +

                "</div >" +

                "</div >";


            $(v).appendTo("#all_videos_user");

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

    // *********************************EVENTS JQUERY*************************************************************
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

    // lectura para todos los testimonios User

    $("#btn_add").click(function (e) {
        var txt_managerName = $("#txt_event_managerName").val();
        if (txt_managerName == 0) {
            $("#txt_managerName").text("✘ Espacio obligatorio");
            $("#txt_managerName").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else {
            $("#txt_managerName").text("");

            var txt_nameEvent = $("#txt_event_name").val();
            if (txt_nameEvent == '') {
                $("#txt_eventname").text("✘ Espacio obligatorio");
                $("#txt_eventname").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                return false;
            } else {
                $("#txt_eventname").text("");
                var txt_desc = $("#txt_event_desc").val();
                if (txt_desc == '') {
                    $("#txt_desc").text("✘ Espacio obligatorio");
                    $("#txt_desc").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                    return false;

                } else {
                    $("#txt_desc").text("");
                    var txt_date = $("#txt_event_date").val();
                    if (txt_date == '') {
                        $("#txt_eventdate").text("✘ Espacio obligatorio");
                        $("#txt_eventdate").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                        return false;
                    } else {
                        $("#txt_eventdate").text("");
                        var txt_time = $("#txt_event_time").val();
                        if (txt_time == '') {
                            $("#txt_eventtime").text("✘ Espacio obligatorio");
                            $("#txt_eventtime").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                            return false;
                        } else {
                            $("#txt_eventtime").text("");
                            var txt_image = $("#txt_event_image").val();
                            if (txt_image == '') {
                                $("#txt_eventimg").text("✘ Espacio obligatorio");
                                $("#txt_eventimg").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                                return false;
                            } else {
                                $("#txt_eventimg").text("");
                            }

                        }
                    }
                }
            }
        }
        $.ajax({
            url: "Controllers/insertEvent.php",
            method: "POST",
            data: { txt_managerName: txt_managerName, txt_nameEvent: txt_nameEvent, txt_desc: txt_desc, txt_date: txt_date, txt_time: txt_time, txt_image: txt_image },
            success: function (response) {
                if (statustext == "success") {
                    console.log("exitosamente")
                }
            },
            error: function (request, errorcode, errortext) {
                console.log("errorrrrrr")

            }
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

    $("#button_update").click(function (e) {


        var txt_Id = $("#txt_Id").val();
        var txt_Name = $("#txt_Name").val();
        var txt_Eventname = $("#txt_Eventname").val();
        var txt_Desc = $("#txt_Desc").val();
        var txt_Eventdate = $("#txt_Eventdate").val();
        var txt_Eventtime = $("#txt_Eventtime").val();
        var txt_Eventimg = $("#txt_Eventimg").val();


        $.ajax({
            url: "Controllers/update_Event.php",
            method: "POST",
            data: {
                txt_Id: txt_Id, txt_Name: txt_Name, txt_Eventname: txt_Eventname, txt_Desc: txt_Desc, txt_Eventdate: txt_Eventdate,
                txt_Eventtime: txt_Eventtime, txt_Eventimg: txt_Eventimg
            },

            success: function (dataresponse, statustext, response) {
                if (statustext == "success") {
                    $("#respuesta").html(dataresponse);

                    location.href = "../Admin/events.php";
                    // window.location("../Admin/events.php")
                }
            },
            error: function (request, errorcode, errortext) {
                $("#respuesta").html(errorcode);
            }

        });

    });

    $("#btn_testimony").click(function (e) {



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
            }
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

    $("#button_update").click(function (e) {


        var txt_Id = $("#txt_Id").val();
        var txt_Name = $("#txt_Name").val();
        var txt_Eventname = $("#txt_Eventname").val();
        var txt_Desc = $("#txt_Desc").val();
        var txt_Eventdate = $("#txt_Eventdate").val();
        var txt_Eventtime = $("#txt_Eventtime").val();
        var txt_Eventimg = $("#txt_Eventimg").val();


        $.ajax({
            url: "Controllers/update_Event.php",
            method: "POST",
            data: {
                txt_Id: txt_Id, txt_Name: txt_Name, txt_Eventname: txt_Eventname, txt_Desc: txt_Desc, txt_Eventdate: txt_Eventdate,
                txt_Eventtime: txt_Eventtime, txt_Eventimg: txt_Eventimg
            },

            success: function (dataresponse, statustext, response) {
                if (statustext == "success") {
                    $("#respuesta").html(dataresponse);

                    location.href = "../Admin/events.php";
                    // window.location("../Admin/events.php")
                }
            },
            error: function (request, errorcode, errortext) {
                $("#respuesta").html(errorcode);
            }

        });

    });

    $("#btn_testimony").click(function (e) {



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
            }
        });
    });

    // lectura para todos los testimonios User

    $("#btn_add").click(function (e) {
        var txt_managerName = $("#txt_event_managerName").val();
        if (txt_managerName == 0) {
            $("#txt_managerName").text("✘ Espacio obligatorio");
            $("#txt_managerName").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else {
            $("#txt_managerName").text("");

            var txt_nameEvent = $("#txt_event_name").val();
            if (txt_nameEvent == '') {
                $("#txt_eventname").text("✘ Espacio obligatorio");
                $("#txt_eventname").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                return false;
            } else {
                $("#txt_eventname").text("");
                var txt_desc = $("#txt_event_desc").val();
                if (txt_desc == '') {
                    $("#txt_desc").text("✘ Espacio obligatorio");
                    $("#txt_desc").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                    return false;

                } else {
                    $("#txt_desc").text("");
                    var txt_date = $("#txt_event_date").val();
                    if (txt_date == '') {
                        $("#txt_eventdate").text("✘ Espacio obligatorio");
                        $("#txt_eventdate").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                        return false;
                    } else {
                        $("#txt_eventdate").text("");
                        var txt_time = $("#txt_event_time").val();
                        if (txt_time == '') {
                            $("#txt_eventtime").text("✘ Espacio obligatorio");
                            $("#txt_eventtime").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                            return false;
                        } else {
                            $("#txt_eventtime").text("");
                            var txt_image = $("#txt_event_image").val();
                            if (txt_image == '') {
                                $("#txt_eventimg").text("✘ Espacio obligatorio");
                                $("#txt_eventimg").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                                return false;
                            } else {
                                $("#txt_eventimg").text("");
                            }

                        }
                    }
                }
            }
        }
        $.ajax({
            url: "Controllers/insertEvent.php",
            method: "POST",
            data: { txt_managerName: txt_managerName, txt_nameEvent: txt_nameEvent, txt_desc: txt_desc, txt_date: txt_date, txt_time: txt_time, txt_image: txt_image },
            success: function (response) {
                if (statustext == "success") {
                    console.log("exitosamente")
                }
            },
            error: function (request, errorcode, errortext) {
                console.log("errorrrrrr")

            }
        });
    });
});

function deleteTestimonial(idTesti) {

    $.ajax({
        url: "Controllers/deleteTestimonial.php",
        method: "POST",
        data: { idTesti: idTesti },
        success: function (dataresponse, statustext, response) {
            if (statustext == "success") {
                $("#respuesta").html(dataresponse);

                $("#bodytestimonial").html("");
                // lectura para todos los testimonios
                var url = "Controllers/call_testimonials.php";
                $.getJSON(url, function (dato) {

                    $.each(dato, function (i, testimonials) {

                        var t =
                            "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
                            "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
                            "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
                            "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" onclick=\"deleteTestimonial('" + testimonials.idTesti + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
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

            }
        },
        error: function (request, errorcode, errortext) {

        }

    });
}


function deleteEvent(idEvent) {

    $.ajax({
        url: "Controllers/deleteEvents.php",
        method: "POST",
        data: { idEvent: idEvent },
        success: function (dataresponse, statustext, response) {
            if (statustext == "success") {
                $("#respuesta").html(dataresponse);

                $("#bodyEvents").html("");
                // lectura para todos los eventos admin
                var url = "Controllers/call_events.php";
                $.getJSON(url, function (dato) {

                    $.each(dato, function (i, events) {

                        var t =
                            "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                            "<div class=\"card\" style=\"width: 18rem;\">" +
                            "<img style=\"width: 289px; height: 200px;\" src=\"../../img/" + events.img + "\" class=\"card-img-top\" alt=\"...\">" +
                            "<div class=\"card-body\">" +
                            "<h5 class=\"card-title\">" + events.nameEvent + "</h5>" +
                            "<div class=\"card-footer bg-transparent fs-sm\"><span class=\"o-50\"> Por </span> <a " +
                            "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\">" + events.name + "</a><br> <span" +
                            "class=\"o-50\"> Fecha: </span>" + events.date + "<a href=\"\"" +
                            "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a>" +
                            "</div>" +
                            "<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">" +
                            "<button class=\"btn btn-link me-md-1 mr-1\" type=\"button\"><a id=\"btn_delete\" onclick=\"deleteEvent('" + events.id + "')\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                            "<button class=\"btn btn-link\" type=\"button\"><a data-bs-toggle=\"modal\" data-bs-target=\"#new_event\" id=\"\" class=\"fa fa-pen fa-lg\" href=\"#\"></a></button>" +
                            "</div>" +
                            "</div>" +
                            "</div>" +
                            "</div>";


                        $(t).appendTo("#bodyEvents");

                    });

                });

            }
        },
        error: function (request, errorcode, errortext) {

        }

    });
}

function deleteConsul(idConsul) {

    $.ajax({
        url: "Controllers/deleteConsul.php",
        method: "POST",
        data: { idConsul: idConsul },
        success: function (dataresponse, statustext, response) {
            if (statustext == "success") {
                $("#respuesta").html(dataresponse);

                $("#bodyconsul").html("");
                // lectura para todos las consultas
                var url = "Controllers/call_consul.php";
                $.getJSON(url, function (dato) {

                    $.each(dato, function (i, consul) {

                        var t =
                            "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
                            "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
                            "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
                            "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" onclick=\"deleteConsul('" + consul.id + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                            "<input type=\"checkbox\" id=\"check\" >" +
                            "<p class=\"fs-1 text-secondary o-25 mb-0\">" + consul.subject + "</p>" +
                            "<p class=\"fs-6\">" + consul.consul + "</p>" +
                            "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">" + consul.name + "</span>  -" + consul.gmail + "</p>" +
                            "</blockquote>" +
                            "</figure>" +
                            "</div>";

                        $(t).appendTo("#bodyconsul");

                    });

                });

            }
        },
        error: function (request, errorcode, errortext) {

        }

    });
}


function getEvent(id) {

    $.ajax({
        url: "Controllers/get_event.php",
        method: "POST",
        data: { id: id },
        success: function (dataresponse, statustext, response) {
            //console.log(response)
            if (statustext == "success") {
                $("#respuesta").html(dataresponse);

            } //termina if
        },
        error: function (request, errorcode, errortext) {
            $("#respuesta").html(errorcode);
        }

    });

}






