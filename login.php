<?php
    $alert = '';
    session_start();
if(!empty($_SESSION['active'])){
    header('location: sistema/');
}else{

    if(!empty($_POST)){
       if(empty($_POST['usuario']) || empty($_POST['clave']))
       {
        $alert = 'Ingrese su usuario y su clave';
       }else{
        
        include('conexion.php');
        $user = $_POST['usuario'];
        $pass = $_POST['clave'];

        $query = mysqli_query($conn,"SELECT * FROM usuario WHERE usuario = '$user' AND clave = '$pass'");
        //mysqli_close($conection);
        $result = mysqli_num_rows($query);

        if($result  == 1){
            $data = mysqli_fetch_array($query);
            
            $_SESSION['active'] = true;
            /*idUser para poner el numero  del id del usuario*/
            $_SESSION['idUser'] = $data['idusuario'];
            $_SESSION['nombre'] = $data['nombre'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['user'] = $data['usuario'];
            $_SESSION['rol'] = $data['rol'];

            header('location: sistema/');
           // echo	"<script> alert('Usuario logueado.');window.location= 'empleadoS.php' </script>";
        }else{
            $alert = 'El usuario o la clave son incorrectas';
            session_destroy();
            }

        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login | Registrar</title>
    
</head>
<body>
    <section id="container">
        <form action="" method="post">
            <h3>Iniciar sesion</h3>
            <img src="" alt="login">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="clave" placeholder="Contraseña">
            <div class="alert"><?php echo isset($alert)? $alert: ''; ?></div>
            <input type="submit" value="INGRESAR">
        </form>
    </section>
</body>
</html>