<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../../../ajax/ajax.js"></script>
    <script src="../../../ajax/javascript.js"></script>
</head>

<body>
    <form action="" method="POST" class="formulario__register">

        <h2>Regístrarse</h2>
        <input type="text" placeholder="Cedula" id="txt_user_id" name="txt_user_id">
        <input type="text" placeholder="Nombre" id="txt_name" name="txt_name">
        <input type="text" placeholder="Apellidos" id="txt_surname" name="txt_surname">
        <input type="password" placeholder="Contraseña" id="txt_password" name="txt_password">

        <button class="btn btn-info" id="btn_singUp" name="btn_singUp" type="submit">Registrarse</button>
        <br>
        <a class="rounded-pill shadow-none me-2 px-4 fw-bold" href="../User/home.php">Menu principal</a>
    </form>
</body>

</html>