<?php

include 'head.php';
session_start();
//echo'<pre>';
var_dump(($_SESSION['tapas']));
//echo'</pre>';
echo '<table> 
<tr>
    <th>Codigo de la tapa</th>
    <th>Nº de votos</th>
</tr>';
foreach($_SESSION['votos']as $clave=>$valor)
{
    echo '<tr>';
        echo '<td>'.$clave.'</td>';
        echo '<td>'.$valor.'</td>';
    echo '<tr>';
}

echo '</table>';                                                                                  
 
 include 'pie.php';

