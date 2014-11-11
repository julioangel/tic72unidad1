<?php
require('logueo.php');
require('bd.php');
 $objlogueo=new logueo();

if (isset($_POST['submit'])){
    switch ($_POST['submit']){
        case "Iniciar":
            echo"<div class=\"alert alert-danger\" role=alert>";
           // echo "<br>Bot&oacute;n:" . $_POST['submit'];
            echo"</div>";
            $objlogueo->Insertar_Datos("$_POST[usuario]","$_POST[status]");
            break;
           }

}




echo"<form action=logueo2.php method=post>
    <table>
        <tr>
            <td>Usuario:</td>
            <td><input name=usuario required=required type=text /></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input name=status required=required type=password /></td>
        </tr>
        <tr>

            <td colspan=4 align=center><input  type=submit name=submit value=Iniciar></td></tr>
    </table></center></form>";


?>