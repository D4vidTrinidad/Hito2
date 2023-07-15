<?php
session_start();
if($_SESSION["tipo"]!="cliente"){
    echo "<h1>No tienes aceso</h1>";
    echo "<a href='bienvenido.php'>Regresar a tu cuenta</a>";
    return;
}
require_once "controladores/CitaController.php";


$cc = new CitaController();

$resultado = $cc->buscarcitas($_SESSION["id"]);


?>
<title>BIENVENIDO</title>

<table border="1">
    <tr>
        <th>id</th>
        <th>fecha</th>
        <th>hora</th>
        <th>motivo</th>
        <th>usuario-id</th>
        
    <tr>
        <?php
        foreach ($resultado as $cita) {
            echo "<tr>
                <td>" . $cita["id"] . "</td>
                <td>" . $cita["fecha"] . "</td>
                <td>" . $cita["hora"] . "</td>
                <td>" . $cita["motivo"] . "</td>
                <td>" . $cita["nombre"] . "</td>
               
                
              </tr>";
        }   
        ?>
        </table>

        
        
