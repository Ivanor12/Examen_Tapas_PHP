<?php
session_start();
include 'head.php';
if(isset($_REQUEST['votar']))
{
  $indice=$_REQUEST['codigo'];
  $_SESSION['votos'][$indice]++;
}         
//si hemos pulsado votar, el indice aumenta en uno, porque hemos dado un voto                               
                                  
echo'<form action="" method="post">
            Selecciona la Tapa a la cual quieres votar
                            <select name="codigo">';
                            foreach($_SESSION['tapas']as $clave=>$valor)
                            {
                              echo'<option value="'.$clave.'">'.$valor[0]. '</option>';
                            } 
                                  '<option value="1">Crujiente de Arroz con rollitos de atún y verduras en escabeche</option>
                                  <option value="2">La Mar de Pincho</option>
                                  <option value="3">Pincho el indiano de Cantabria</option>
                                  <option value="4">Tierra, sabor, tradición</option>
                                  <option value="5">Txerri Beltz</option>
                                  <option value="6">Esencia</option>
                                  <option value="7">Rebanada de Vida</option>
                                 
                                </select>
     <br> 
     <input name="votar" type="submit"  value="Votar"/>
             
    </form>';

 include 'pie.php';

