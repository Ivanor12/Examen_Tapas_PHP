<?php
session_start();
include 'head.php';
if(isset($_REQUEST['borrar'])) //si he pulsado Calcular
{
  $codigo_tapa=$_REQUEST['codigo'];
  //numero elementos en el array antes de borrar
  $contador_antes=count($_SESSION['tapas']);
  //borro en el array [$codigo_tapa es el indice que queremos borrar]
  unset($_SESSION['tapas'][$codigo_tapa]);
  //numero elementos en el array despues de borrar
  $contador_despues=count($_SESSION['tapas']);
  if($contador_antes==$contador_despues)
  {
    echo '<script>alert("No se encuentra esa tapa");</script>';
  }
  else{
    unset($_SESSION['votos'][$codigo_tapa]);
    echo '<script>alert("La tapa se ha borrado con exito");</script>';
  }
  //echo'<pre>';
  //var_dump($_SESSION['votos']);
  //echo'</pre>';
}                                                  
 print' 
            <strong>INTRODUCE EL CODIGO DE LA TAPA A  PARA BORRAR <BR><BR></strong>
                                     
        <div   class="postcontent">
         <form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr>
                <td align="right">Codigo de la Tapa :</td><td>
             
                    <input type="text" name="codigo" size="10"/>
                </td>
              </tr>
              
              
              <tr>
                <td colspan="2" >
                    <input name="borrar" type="submit"  value="Borrar Tapa"/>
                </td>
             </tr>
        </table>
    </form>
        </div>';
 include 'pie.php';