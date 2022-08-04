<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <title>Document</title>
    <link rel="stylesheet" href="../../css/events.css">

</head>

<body>

    <!-- Sing up  -->
    <form action="" name="frm_sing_up">
        <div class="modal fade" id="userSignupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <button class="btn-close btn-close-menu position-absolute top-0 start-100 translate-middle"
                        type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span class="btn-close-icon"></span>
                    </button>

                    <div class="modal-body p-4">
                        <h6 class="mb-4">Crear cuenta</h6>

                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="userSignup_num_ide" class="form-label fs-sm fw-bold">N&uacute;mero de
                                    identificaci&oacute;n</label>
                                <input type="number" class="form-control shadow-none" id="userSignup_num_ide" />
                                <p id="alter_cedula"></p>
                            </div>

                            <div class="row gx-2">
                                <div class="col-12 col-sm-6">
                                    <div class="mb-3">
                                        <label for="userSignup_name" class="form-label fs-sm fw-bold">Nombre</label>
                                        <input type="text" class="form-control shadow-none" id="userSignup_name" />
                                        <p id="alter_name"></p>
                                    </div>
                                </div>
                                <!-- class col-12 -->

                                <div class="col-12 col-sm-6">
                                    <div class="mb-3">
                                        <label for="userSignup_lastNames"
                                            class="form-label fs-sm fw-bold">Apellidos</label>
                                        <input type="text" class="form-control shadow-none" id="userSignup_lastNames" />
                                        <p id="alter_lastNames"></p>
                                    </div>
                                </div>
                                <!-- class col-12 -->
                            </div>
                            <!-- class row -->

                            <div class="mb-3">
                                <label for="userSignup_gender" class="form-label fs-sm fw-bold">G&eacute;nero</label>
                                <div class="col-md-9 pt-2" id="userSignUp_rd_gender">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="userSignup_gender"
                                            id="userSignup_rd_sex1" value="F">
                                        <label class="form-check-label">Femenino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="userSignup_gender"
                                            id="userSignup_rd_sex2" value="M">
                                        <label class="form-check-label">Masculino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="userSignup_gender"
                                            id="userSignup_rd_sex3" value="M">
                                        <label class="form-check-label">Otro</label>
                                    </div>
                                </div>
                                <p id="genero"></p>
                            </div>

                            <div class="mb-3">
                                <label for="userSignup_date_born" class="form-label fs-sm fw-bold">Fecha de
                                    nacimiento</label>
                                <input type="date" class="form-control shadow-none" id="userSignup_date_born" />
                                <p id="alert_fech"></p>
                            </div>

                            <div class="mb-3">
                                <label for="userSignUp_phone_number" class="form-label fs-sm fw-bold">N&uacute;mero de
                                    tel&eacute;fono</label>
                                <input type="number" class="form-control shadow-none" id="userSignUp_phone_number" />
                                <p id="alert_phone"></p>
                            </div>

                            <div class="mb-3">
                                <label for="userSignUp_email" class="form-label fs-sm fw-bold">Email</label>
                                <input type="text" class="form-control shadow-none" id="userSignUp_email" />
                                <p id="alert_email"></p>
                            </div>

                            <div class="mb-3">
                                <label for="userSignUp_Password"
                                    class="form-label fs-sm fw-bold">Contrase&ntilde;a</label>
                                <input type="password" class="form-control shadow-none" id="userSignUp_Password" />
                                <label><img src="../../web/img/eyes1 .png" alt="" id="eyes"></label></input>
                                <p id="alert_password"></p>
                            </div>

                            <div class="mb-3">
                                <button id="btn_procesar" type="submit"
                                    class="btn btn-primary w-100 text-uppercase fw-bold">Registrarse</button>
                            </div>
                        </form>

                        <div class="text-center text-secondary fs-sm">
                            <p class="mb-0">¿Ya tienes una cuenta? <a href="#" class="text-decoration-underline"
                                    data-bs-dismiss="modal" data-bs-toggle="modal"
                                    data-bs-target="#userSignInModal">Iniciar sesi&oacute;n</a></p>
                        </div>
                        <!-- class text-center -->
                    </div>
                    <!-- class modal-body -->
                </div>
                <!-- class modal-content -->
            </div>
            <!-- class modal-dialog modal-dialog-centered modal-sm -->
        </div>
    </form>
</body>

</html>