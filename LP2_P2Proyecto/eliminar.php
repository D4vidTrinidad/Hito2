<?php
    $id = $_REQUEST["id"];
?>
<h2>¿Desea eliminar el usuario?</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <input type="hidden" name="id" value="<?php echo $id;?>"><br>
    <input type="submit" value="Sí">
    <a href="mostrarAdmin.php"><input type="button" value="No"></a>
<form> 

<?php
    if(!empty($_POST)){
        $id = $_POST["id"];
        require_once "modelos/Usuario.php";

        $pc = new Usuario();
        $resultado = $pc->eliminar($id);    

        if($resultado!=0){
            header("location: mostrarAdmin.php");
        }else{
            echo "Error: no se eliminó el usuario";
        }
    }   
?>