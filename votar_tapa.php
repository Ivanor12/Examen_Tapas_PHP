<?php
session_start();
include 'head.php';
//ha pulsado el boton votar
if(isset($_REQUEST['votar']))
{
  $indice=$_REQUEST['codigo'];
  $_SESSION['votos'][$indice]++;
}         
//si hemos pulsado votar, el indice aumenta en uno, porque hemos dado un voto                               
                                  
echo'<form action="" method="post">
            Selecciona la Tapa a la cual quieres votar
                            <select name="codigo">';
                            foreach($_SESSION['tapas'] as $clave=>$vector)
                            {
                              echo'<option value="'.$clave.'">'.$vector[0]. '</option>';
                            }
                                 
                               echo '</select>
     <br> 
     <input name="votar" type="submit"  value="Votar"/>
             
    </form>';

 include 'pie.php';

