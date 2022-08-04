<?php require_once("../../Includes/headerAdmin.php");?>

<body>

    <section id="page-hero" class="section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6">
        <div class="bg bg-img position-absolute" data-bg-img=".img"><img loading="lazy"
                src="../../img/events_wallpaper.jpg" class="img" alt="Image" /></div>
        <!-- /.bg bg-img position-absolute -->

        <div class="container-xl position-relative section-content text-center py-4">

            <h2 class="display-5 text-white mt-3 mt-lg-4">Proximos eventos</h2>

            <p class="lead mb-4 mb-lg-5">Comparte con nosotros!</p>
        </div>
        <!-- /.container-xl position-relative -->
    </section>
    <!-- #page-hero.section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6 -->

    <section id="news-1" class="section pb-6 mt-n4 mt-lg-n5 mt-xl-n6">
        <div class="bg bg-img position-absolute" data-bg-img=".img"></div>
        <!-- /.bg bg-img position-absolute -->

        <div class="container-xl position-relative">
            <header class="section-header mb-5 visually-hidden">
                <h2 class="fs-3 text-center section-title mb-3">News and Insight</h2>

                <p class="lead text-center mb-0 o-75">Quasi deleniti aliquam ab reprehenderit tempore inventore esse est
                    veniam unde</p>
            </header>
            <!-- /.section-header mb-5 visually-hidden -->

            <!-- ////////////////////////////////////////////////////////////////////////// -->

            <div class="section-filter mb-4 mb-lg-5">
                <div class="row g-3">
                    <div class="col-12 col-md section-content text-center text-md-start">
                        <br>
                        <p class="mb-0" id="result_found_events"><strong>80</strong>&nbsp;Results&nbsp;Found</p>

                    </div>
                    <!-- /.col-12 col-md -->
                    <div class="col col-md-auto text-md-end ms-md-auto" style="display: flex;">
                        <!-- <button class="btn btn-link p-0 ms-3 shadow-none" data-bs-toggle="modal"
                            data-bs-target="#userSignInModal"><i class="fas fa-user"></i></button> -->
                        <p class="text-light ">
                            <a data-bs-toggle="modal" data-bs-target="#new_event"
                                class="btn btn-success  shadow-none me-2 px-4 fw-bold " href="#"
                                id="btn_insert_event"><i class="fas fa-plus"></i> Insertar evento</a>
                        </p>
                        <!-- /.text-light -->

                        <p class="text-light">
                            <a class="btn btn-danger  shadow-none me-2 px-4 fw-bold " href="#" id="btn_delete_event"><i
                                    class="fas fa-trash"></i> Eliminar eventos</a>
                        </p>
                        <!-- /.text-light -->

                        <p class="text-light">
                            <a class="btn btn-warning shadow-none me-2 px-4 fw-bold " href="#" id="btn_update_event"><i
                                    class="fas fa-pen"></i> Editar eventos</a>
                        </p>
                        <!-- /.text-light -->
                    </div>
                    <!-- /.col col-md-auto text-md-end ms-md-auto -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.section-filter -->

            <!-- ////////////////////////////////////////////////////////////////////////// -->

            <br>
            <br>
            <br>

            <div class="row g-4 mb-5">
                <?php
                for ($i=0; $i < 8; $i++) { 
                    ?>
                <div class="col-12 col-sm-6 col-md-3 d-flex">
                    <div class="card card__minimal h-100">
                        <div class="card-img-top overflow-hidden position-relative">
                            <img loading="lazy" src="../../img/nathan-mullet-GoFys2bZJaE-unsplash.jpg" class="w-100"
                                alt="Image" />
                        </div>
                        <div class="card-body pt-3">
                            <h3 class="fs-5"><a href="" class="stretched-link">Japan Through The lenses</a></h3>
                        </div>
                        <div class="card-footer bg-transparent fs-sm"><span class="o-50">By</span> <a href=""
                                class="fw-bold o-50 o-100-hover trans-base position-relative zi-20">John Doe</a> <span
                                class="o-50">in</span> <a href=""
                                class="fw-bold o-50 o-100-hover trans-base position-relative zi-20">News</a></div>
                    </div>
                    <!-- /.card card__minimal -->
                </div>
                <!-- /.col-12 col-sm-6 col-md-3 d-flex -->
                <?php
                }
                
                ?>

            </div>
            <!-- /.row g-4 mb-5 -->

            <footer class="section-footer d-flex justify-content-center">
                <div class="btn-toolbar mb-0 me-3" role="toolbar">
                    <div class="btn-group me-2" role="group">
                        <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">Anterior</a>
                        <a href="#" class="btn btn-outline-dark btn-default btn-sm active px-3">1</a>
                        <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">2</a>
                        <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">3</a>
                        <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">4</a>
                        <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">5</a>
                        <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">Siguiente</a>
                    </div>
                </div>
            </footer>
            <!-- /.section-footer d-flex justify-content-center -->
        </div>
        <!-- /.container-xl -->
    </section>
    <!-- #news-1.section pb-6 mt-n4 mt-lg-n5 mt-xl-n6 -->
    <div class="modal fade" id="new_event" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <button class="btn-close btn-close-menu position-absolute top-0 start-100 translate-middle"
                    type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span class="btn-close-icon"></span>
                </button>

                <div class="modal-body p-4">
                    <form action="" method="post">
                        <h6 class="mb-4" style="text-align: center;">Ingrese el Evento</h6>

                        <div class="mb-3 ">
                            <label for="event_managerName" class="form-label fs-sm fw-bold">Nombre del encargado</label>
                            <input type="text" class="form-control shadow-none" id="event_managerName" />
                        </div>

                        <div class="mb-3">
                            <label for="event_name" class="form-label fs-sm fw-bold">Nombre del evento</label>
                            <input type="text" class="form-control shadow-none" id="event_name" />
                        </div>

                        <div class="mb-3">
                            <label for="event_desc" class="form-label fs-sm fw-bold">Descripci&oacute;n</label>
                            <textarea class="form-control shadow-none" id="event_desc" cols="35" rows="2"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="event_date" class="form-label fs-sm fw-bold">Fecha del evento</label>
                            <input type="date" class="form-control shadow-none" id="event_date" />
                        </div>

                        <div class="mb-3">
                            <label for="event_time" class="form-label fs-sm fw-bold">Hora</label>
                            <input type="time" class="form-control shadow-none" id="event_time" />
                        </div>

                        <div class="mb-3">
                            <label for="event_image" class="form-label fs-sm fw-bold">Insertar Imagen</label>
                            <input type="file" class="form-control shadow-none" id="event_image" />
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100 text-uppercase fw-bold">Agregar</button>
                        </div>
                    </form>

                </div>
                <!-- /.modal-body -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- modal-dialog modal-dialog-centered -->
    </div>
    <!-- #new_event -->
    <?php require_once("../../Includes/footerAdmin.php");?>