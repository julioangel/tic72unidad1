<?php
/**
 * Created by PhpStorm.
 * User: Maldonado
 * Date: 16/10/14
 * Time: 12:49 PM
 */
require('bd.php');
class logueo {

        public function Insertar_Datos($usuario, $status){

              $result ="SELECT  Nombre, Estatus, Id FROM usuario WHERE Nombre='$usuario' and Estatus='$status'";
//echo"$result";
                $ex=mysql_query($result) or die (mysql_error());
                $total=mysql_num_rows($ex);
//echo"$total";
                if ($total>0)
                {
                    $nombre2=mysql_result($ex,0,'Nombre' );
                    $status2=mysql_result($ex,0,'Estatus' );
                    $id=mysql_result($ex,0,'Id' );

                    if($status2 == $status and $nombre2==$usuario)
                    {
                        //Creamos sesión
                        session_start();
                        //Almacenamos el nombre de usuario en una variable de sesión usuario
                        $_SESSION['status5'] = $status2;
                        $_SESSION['nombre5'] = $nombre2;
                        $_SESSION['id'] = $id;
                        //Redireccionamos a la pagina: index2.php
                        header("Location: index2.php");
                    }
                }

                else
                {

                    echo"<script languaje=javascript>
                        alert('Estatus o nombre Incorrecta');
                        location.href = logueo2.php;
                    </script>";
                    }
        }
}
?>






