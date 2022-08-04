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
    <scrip src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/script.js"></script>

</head>


<body>


    <main>
    <form action="#" method="POST" class="" id="">

    <h2>Regístrarse</h2>
    <input type="text" id="id" placeholder="Cedula"  >
    <input type="text"  id="name" placeholder="Nombre" >
    <input type="text" placeholder="Apellidos" id="lastname" >
    <input type="text" placeholder="Correo Electronico" id="gmail" > 
    <input type="password" placeholder="Contraseña" id="password" >

    <button class="btn btn-info" id="btn_singUp" type="submit" onclick="return registro();" >Registrarse</button>

    <br>
    <a class="rounded-pill shadow-none me-2 px-4 fw-bold" href="../User/home.php">Menu principal</a>
    </form>

    </main>
  
    
</body>

</html>