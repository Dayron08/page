<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacto de Vida</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300&family=Zen+Old+Mincho&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300&family=Oswald&family=Zen+Old+Mincho&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../css/estilos.css">
   
</head>


<body>


    <main>
        <!--Cuadros de iniciar sesion o registrarse-->
        <div class="contenedor__principal">
            <h2 id="title">IGLESIA PACTO DE VIDA</h2><br>
            <div class="contenedor__inferior">
                <div class="contenedor__inferior-login">
                    <h3>Si tienes una cuenta:</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="contenedor__inferior-register">
                    <h3>¿Deseas crear una cuenta?</h3>
                    <p>Regístrate para que acceder a la página</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formularios de datos-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                    <br>
                    <a class="btn rounded-pill shadow-none me-2 px-4 fw-bold " href="../Admin/home.php">Menu
                        principal</a>
                </form>

                <!--Register-->
                <form action="#" method="POST" class="formulario__register">

                <h2>Regístrarse</h2>
                <input type="text" placeholder="Cedula" id="id" >
                <input type="text" placeholder="Nombre" id="name" >
                <input type="text" placeholder="Apellidos" id="lastname" >
                <input type="text" placeholder="Correo Electronico" id="gmail" > 
                <input type="password" placeholder="Contraseña" id="password" >

                <button class="btn btn-info" id="btn_singUp" type="submit">Registrarse</button>
                <br>
                <a class="rounded-pill shadow-none me-2 px-4 fw-bold" href="../User/home.php">Menu principal</a>
                </form>
            </div>
        </div>

    </main>

    <script src="../../js/script.js"></script>
   
</body>

</html>