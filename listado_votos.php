<?php
session_start();
include 'head.php';
//echo'<pre>';
//var_dump(($_SESSION['votos']));
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

