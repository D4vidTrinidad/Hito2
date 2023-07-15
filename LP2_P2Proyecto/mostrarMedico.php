<?php
session_start();
if ($_SESSION["tipo"] != "medico" and $_SESSION["tipo"] != "administrador") {

    echo "<h1> Tipos de medico </h1>";
    echo "<a href='bienvenido.php'>Regresar a tu cuenta</a>";
    return;
}
require_once "controladores/CitaController.php";
require_once "controladores/UsuarioController.php";

$cc = new CitaController();
$uu = new UsuarioController();
$resultado = $cc->citas();
$usuarios = $uu->usuarios();
?>
<title>INTERFAZ MEDICA</title>

<!--<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <input type="date" name="fecha">
    <input type="time" name="hora">
    <input type="text" name="motivo">
    <select name="usuario_id" id="">
        <*/?php
        foreach ($usuarios as $usuario) {
        ?>
            <option value="<?//= $usuario['id'] ?>"><?//= $usuario['nombre'] ?></option>
        //<?php
        //}
        //?>
        foreach
    </select>
    <button type="submit">Registrar</button>
</form>-->

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