<?php require_once("config.php");
$conexion =();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estiloslogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section>
        <form>
            <h2>Login</h2>
           <div class="group"> 
             <label>Username</label>
             <input type="text">
           </div>
           <div class="group">
            <label>contraseña</label>
            <input type="password" id="pas">
            <i class="fa-solid fa-eye-slash"></i>
           </div>
           <button>INICIAR SESION</button>
        </form>
    </section>
    <script src="js/codigo.js"></script>
</body>
</html>