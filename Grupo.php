<?php
/**
 * Created by PhpStorm.
 * User: Maldonado
 * Date: 13/10/14
 * Time: 12:47 PM
 */
require('bd.php');
class Grupo {

    private $id;
    private $nombre;
    private $avatar;
    private $orden;
    private $estatus;

    public function Alumnos(){
        echo"<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";
        echo"<form action =asignar-alumnos.php method=POST id=grupos>";
        echo"<tr><td colspan=2 align=center><strong>Asignar nuevas materias</strong></td></tr>";
        echo"<tr><td>Alumnos</td><td>";
        $sql04= "SELECT  * FROM usuario order by Nombre asc";
        $result04=mysql_query($sql04) or die ("error en $sql04");
        while($field = mysql_fetch_array($result04)){
            $nombre= $field['Nombre'];
            $idalumno= $field['Id'];
            $estatus= $field['Estatus'];
            if ($estatus==3)
            {

            echo"<input type=checkbox id=alumno name=alumno[] value=$idalumno>$nombre<br>";
            //echo"<input type=hidden name=alumno[]    value=$idalumno><br>";
            }
            else
            {
                echo"$nombre<a href= asignar-alumnos.php?accion=6&idalumno=$idalumno >Desasignar</a><br>";


            }

        }
        echo"</td></tr>";

        echo"<tr><td>Grupos</td><td><select name=grupo id=grupo>";
        $sql04= "SELECT  * FROM grupos ";
        $result04=mysql_query($sql04) or die ("error en $sql04");
        while($field = mysql_fetch_array($result04)){
            $idgrupo= $field['idgrupo'];
            $grupo= $field['grupo'];
            echo"<option value=$idgrupo>$grupo</option><br>";

        }

        echo"</select></td></tr>";
        echo"<input type=hidden name=accion id=accion value=5>";
        echo"<input type=hidden name=idgrupo id=idgrupo value=$idgrupo>";
        echo"<tr><td colspna=2 align=center><input type=submit value=Agregar></td></tr>";
        echo"</form></table></div>";


    }


    public function AlumnoGrupo($idalumno, $grupo)
    {

        $sql04= "insert into alumno_grupo (idalumno, idgrupo) values ($idalumno, $grupo)";
        $result04=mysql_query($sql04) or die ("error en $sql04");
        $sql05= "update usuario set Estatus=4 where Id=$idalumno";
        $result05=mysql_query($sql05) or die ("error en $sql05");
//echo"$sql04  sql04";
    }




    public function gruposalumnos(){


        $sql01="SELECT ag.*, u.*, gru.* FROM grupos AS gru, alumno_grupo AS ag, usuario AS u
WHERE ag.idalumno=u.Id AND ag.idgrupo=gru.idgrupo ORDER BY gru.grupo ";
        $result01=mysql_query($sql01) or die ("error sql01");
        echo"<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";

        echo"<tr><th colspan=5 align=center><strong>Lista de Alumnos y grupos</strong></th></tr>";
        echo"<tr><th>id</th><th>Nombre</th><th>Apellido p</th><th>Apellido m</th><th>Grupo</th>";




        while($field=mysql_fetch_array($result01)){
            $this->Id = $field['Id'];
            $this->Nombre = $field['Nombre'];
            $this->ApellidoPaterno =utf8_decode($field['ApellidoPaterno']);
            $this->ApellidoMaterno =utf8_decode($field['ApellidoMaterno']);
            $this->Nivel = $field['Nivel'];
            $this->grupo = $field['grupo'];
            // echo"<br>Id:".$this->Id;
            //echo"<br>Nombre:".$this->Nombre;
            //echo"<br>ApellidoPaterno:".$this->ApellidoPaterno;
            //echo"<br>ApellidoMaterno:".$this->ApellidoMaterno;
            //echo"<br>Nivel:".$this->Nivel;
            echo"<tr><td>$this->Id</td><td>$this->Nombre</td>
           <td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$this->grupo</td>
           </tr>";

        }

        echo"</table>";
        echo"</div>";
    }
    public function borrar_alumno_grupo($idalumno)
    {

        $sql04= "delete from alumno_grupo where idalumno=$idalumno";
        $result04=mysql_query($sql04) or die ("error en $sql04");
        $sql05= "update usuario set Estatus=3 where Id=$idalumno";
        $result05=mysql_query($sql05) or die ("error en $sql05");
    //echo"Alumno desasignado correctamente $idalumno";
//echo"$sql04  sql04";
    }



}



?>