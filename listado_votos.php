<?php

include 'head.php';
session_start();
//echo'<pre>'; //para definir un texto preformateado
var_dump(($_SESSION['votos']));
//echo'</pre>';
echo '<table> 
<tr>
    <th>Codigo de la tapa</th>
    <th>Nº de votos</th>
</tr>';
foreach($_SESSION['votos'] as $clave=>$vector)
{
    echo '<tr>
        echo <td>'.$clave.'</td>;
        echo <td>'.$valor.'</td>;
    <tr>';
}
echo '</table>';                                                                                  
 
 include 'pie.php';

