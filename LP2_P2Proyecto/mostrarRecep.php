<?php
session_start();
if ($_SESSION["tipo"] != "recepcionista" and $_SESSION["tipo"] != "administrador") {

    /*echo "<h1> Tipos de medico </h1>";*/
    echo "<a href='bienvenido.php'>Regresar a tu cuenta</a>";
    return;
}
require_once "controladores/CitaController.php";


$cc = new CitaController();
$resultado = $cc->citas();

?>

<title>INTERFAZ DE RECEPCIÓN</title>

<table border="1">
    <tr>
        <th>id</th>
        <th>fecha</th>
        <th>hora</th>
        <th>motivo</th>
        <th>usuario-id</th>
        <th>&nbsp</th>
        <th>&nbsp</th>
    <tr>
        <?php
        foreach ($resultado as $cita) {
            echo "<tr>
                <td>" . $cita["id"] . "</td>
                <td>" . $cita["fecha"] . "</td>
                <td>" . $cita["hora"] . "</td>
                <td>" . $cita["motivo"] . "</td>
                <td>" . $cita["usuario_id"] . "</td>
                
                <td><a href='actualizarCitas.php?id=" . $cita["id"] . "'>Actualizar</a></td>
                <td><a href='eliminar.php?id=" . $cita["id"] . "'>Eliminar</a></td>
              </tr>";
        }

        ?>

</table>