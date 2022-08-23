$(document).ready(function () {
    //insert video 

    $("#btn_video_code").click(function (e) {
        var video_code = $("#video_code").val();
        // alert("si estoy")
        $.ajax({
            url: "Controllers/videos/insert_video.php",
            method: "POST",
            data: { video_code: video_code },
            success: function (dataresponse, statustext, response) {
                if (statustext == "success") {

                    Swal.fire(
                        'Video Insertado!',
                        'Presiona el boton!',
                        'success'
                    )
                }
            },
            error: function (request, errorcode, errortext) {

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ha Ocurrido un Error!'
                })
            }
        });


    });
});