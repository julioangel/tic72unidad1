<?php

require('bd.php');





$usuario = $_REQUEST["usuario"];
$status = $_REQUEST["status"];

$result ="SELECT  Nombre, Estatus FROM usuario WHERE Nombre='$usuario' and Estatus='$status'";
//echo"$result";
$ex=mysql_query($result) or die (mysql_error());
$total=mysql_num_rows($ex);
//echo"$total";
if ($total>0)
{
$nombre2=mysql_result($ex,0,'Nombre' );
$status2=mysql_result($ex,0,'Estatus' );

    if($status2 == $status and $nombre2==$usuario)
    {
        //Creamos sesión
        session_start();
        //Almacenamos el nombre de usuario en una variable de sesión usuario
        $_SESSION['status5'] = $status2;
        $_SESSION['nombre5'] = $nombre2;
        //Redireccionamos a la pagina: index2.php
        header("Location: index2.php");
    }
}

    else
    {
        //En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
        ?>
        <script languaje="javascript">
            alert("Estatus o nombre Incorrecta");
            location.href = "login.php";
        </script>
    <?

    }
mysql_close();
?>
