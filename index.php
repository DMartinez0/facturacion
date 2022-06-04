<?php
    $alert = '';
    session_start();
    if(!empty ($_SESSION['active']))
    {
        header('location:sistema/');
    }else{
    if(!empty($_POST))
    {
        if (empty($_POST['usuario']) || empty($_POST['password'])) 
        {
         $alert ='Ingrese usuario y contraseña';
           
        }else{
               require_once "conexion.php";

               $user= mysqli_real_escape_string($conection,$_POST['usuario']);
               $pass= md5(mysqli_real_escape_string($conection,$_POST['password']));

               $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario= '$user' AND clave= '$pass'");
               $result = mysqli_num_rows($query);
          
               if ($result > 0)
               {
                   $data= mysqli_fetch_array($query);
                   $_SESSION['active'] = true;
                   $_SESSION['idUser'] = $data['idusuario'];
                   $_SESSION['nombre'] = $data['nombre'];
                   $_SESSION['email']  = $data['email'];
                   $_SESSION['user']   = $data['usuario'];
                   $_SESSION['rol']    = $data['rol'];

                   header('location:sistema/');
               }else{
                   $alert= 'El usuario o contraseña no son correctos';
                   session_destroy ();

               }

            

            
        
        }

        

    }
}

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturacion</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body background="fondo.jpg">
    

    <section class="form-login">
        <form action='' method= 'POST' >
        <h1>INICIAR SESION</h1>
        <!--img src="img/Login.png" alt="Login" width="50px" height="50px"-->
        <input class="controls" type="text" name="usuario"  placeholder="Usuario">
        <input class="controls" type="password" name="password" placeholder="Contraseña">
        <div id= "alerta" class= "alert"> <?php echo isset($alert) ? $alert :' ';?>  </div>
        <input class="botons" type="submit" value="INGRESAR">
        </form>
    </section>


    
</body>
</html>