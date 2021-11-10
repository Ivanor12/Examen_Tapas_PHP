<?php

include 'head.php';
session_start();
if(isset($_REQUEST['Insertar_tapa'])) //si he pulsado el boton Insertar tapa
{
  $codigo_tapa=$_REQUEST['codigo'];
  $nombre_tapa=$_REQUEST['nombre'];
  $precio_tapa=$_REQUEST['precio'];
  $tipo_tapa=$_REQUEST['tipo_tapa'];
  //inserto en el array
  $_SESSION['tapas'][$codigo_tapa]=array($nombre_tapa,$precio_tapa,$tipo_tapa);
  //required para que sea obligatorio meter un dato
  echo'<pre>';
  var_dump($_SESSION['tapas']);
  echo'</pre>';

}
print' 
        <h2 class="postheader">FORMULARIO PARA AÑADIR UNA TAPA</h2>
                                     
           <div   class="postcontent">
                <form action="insertar_tapa.php" method="post">
                    <table align="center" class="content-layout">
                     <tr>
                      <td align="right"><strong>Codigo de la Tapa :</strong></td>
                      <td>
                        <input type="text" name="codigo" size="10" required />
                      </td>
                     </tr>
                     <tr>
                      <td align="right"><strong>Nombre de la Tapa :</strong></td>
                      <td>
                        <input type="text" name="nombre" size="70" required />
                      </td>
                     </tr>
                     <tr>
                      <td align="right"><strong>Precio :</strong></td>
                      <td>
                        <input type="text" name="precio" value="0" size="7" required />€
                      </td>
                     </tr>
                     
                     <tr>
                        <td align="right"><strong>Tipo de Tapa :</strong></td>
                        <td>
                          <div align="left">
                                <select name="tipo_tapa">
                                  <option value="0">Fria</option>
                                  <option value="1">Caliente</option>
                                  <option value="2">Bocadillo</option>
                                  
                                </select>
                           </div>
                          </td>
                    </tr>
                   
                    <tr>
                        <td colspan="2">
                          <div align="center"><strong>
                            <input name="Insertar_tapa" type="submit" value="Insertar Tapa"/>
                            </strong>
                          </div>
                        </td>
                    </tr>
                    </table>
        </form>
        </div>';
//var_dump($_SESSION['tapas']);

include 'pie.php';

