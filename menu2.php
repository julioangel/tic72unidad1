<?php
class Menu2{


public function readProfesorS ($id){

  /*  $sql05="select * from usuario where Id='$id' ";
    $result05=mysql_query($sql05) or die ("error sql05".mysql_error());
    while($field=mysql_fetch_array($result05))
    {

        $this->Nombre = $field['Nombre'];

           }*/

    $sql01="SELECT mm.*, u.*, m.*
    FROM maestro_materia AS mm, materia AS m, usuario AS u
     WHERE mm.id_materia=m.id_materia AND mm.id_maestro=u.Id AND u.Id= '$id' ";
    $result01=mysql_query($sql01) or die ("error sql01".mysql_error());
    $nombreprofe = mysql_result($result01, 0, 'Nombre');
    //echo"$sql01";
    echo"<div class=table-responsive>";
    echo"<table class=\"table table-striped\">";

    echo"<tr><th colspan=''>Lista de Materias del profesor $nombreprofe</th></tr>";
    echo"<tr><th><center>Nombre de la materia</center></th>
       </tr>";



    echo"<div class=table-responsive>";
    echo"<table class=\"table table-striped\">";
    while($field=mysql_fetch_array($result01))
    {

        $this->Materia = $field['materia'];

        echo"<tr><th><center>$this->Materia</center></th>

           </tr>";

    }

    echo"</table>";
    echo"</div>";
}
}


?>