<?php require_once("../../Includes/headerAdmin.php");?>

<body>

<div class="">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <form action="" method="post">
                        <h6 class="mb-4" style="text-align: center;"> Actualizar Evento</h6>

                        <div class="mb-3 ">
                            <label for="" class="form-label fs-sm fw-bold"></label>
                            <input type="hidden" class="form-control shadow-none" id="txt_Id" />
                            <p id="txt_id"></p>
                        </div>

                        <div class="mb-3 ">
                            <label for="event_managerName" class="form-label fs-sm fw-bold">Nombre del encargado</label>
                            <input type="text" class="form-control shadow-none" id="txt_Name" />
                            <p id="txt_name"></p>
                        </div>

                        <div class="mb-3">
                            <label for="event_name" class="form-label fs-sm fw-bold">Nombre del evento</label>
                            <input type="text" class="form-control shadow-none" id="txt_Eventname" />
                            <p id="txt_eventname"></p>
                        </div>

                        <div class="mb-3">
                            <label for="event_desc" class="form-label fs-sm fw-bold">Descripci&oacute;n</label>
                            <textarea class="form-control shadow-none" id="txt_Desc" cols="35" rows="2"></textarea>
                            <p id="txt_desc"></p>
                        </div>

                        <div class="mb-3">
                            <label for="event_date" class="form-label fs-sm fw-bold">Fecha del evento</label>
                            <input type="date" class="form-control shadow-none" id="txt_Eventdate" />
                            <p id="txt_eventdate"></p>
                        </div>

                        <div class="mb-3">
                            <label for="event_time" class="form-label fs-sm fw-bold">Hora</label>
                            <input type="time" class="form-control shadow-none" id="txt_Eventtime" />
                            <p id="txt_eventtime"></p>
                        </div>

                        <div class="mb-3">
                            <label for="event_image" class="form-label fs-sm fw-bold">Insertar nombre de la Imagen</label>
                            <input type="text" class="form-control shadow-none" id="txt_Eventimg" />
                            <p id="txt_eventimg"></p>
                        </div>

                        <!-- <img style="width: 289px; height: 200px;" src="../../../../../../../Users/XPC/Pictures/image_01.jpg" class="card-img-top" alt="..."> -->

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100 text-uppercase fw-bold" id="btn_update">Agregar cambios</button>
                        </div>
                    </form>

                </div>
                <!-- /.modal-body -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- modal-dialog modal-dialog-centered -->
    </div>


    <?php require_once("../../Includes/footerAdmin.php");?>
