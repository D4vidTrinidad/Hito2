<?php
    $id = $_REQUEST["id"];

    require_once "controladores/CitaController.php";

    $cc = new CitaController();

    $cita = $cc->buscarcita($id);
 
?>
<h1>Actualización de cita</h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <input value="<?php echo $cita["fecha"];?>" type="date" name="fecha">
    <input value="<?php echo $cita["hora"];?>"type="time" name="hora">
    <input value="<?php echo $cita["motivo"];?>" type="text" name="motivo">
    <input value="<?php echo $id;?>" type="hidden" name="id">
    <button type="submit">Actualizar</button>
</form>


<?php
    if(!empty($_POST)){
        $id = $_POST["id"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $motivo = $_POST["motivo"];
        


        $uc = new CitaController();
        $resultado = $uc->actualizar($id, $fecha, $hora, $motivo);
     
        if($resultado!=0){
            header("location: mostrarRecep.php?");
        }else{
            echo "Error: no han actualizado los datos";
        }            
           
    }