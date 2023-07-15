<?php
    $id = $_REQUEST["id"];

    require_once "modelos/Usuario.php";
    require_once "controladores/UsuarioController.php";    
    $uc = new Usuario();
    $resultado = $uc->mostrarPorId($id);  
            
    foreach($resultado as $usuario){
        $nombre = $usuario["nombre"];
        $apellido = $usuario["apellido"];
        $correoElectronico = $usuario["correoElectronico"];
        $genero = $usuario["genero"];
        $telefono = $usuario["telefono"];
        $tipo = $usuario["tipo"];

    }       
?>


<h1>Actualizar de Usuario</h1>
<form action="<?php echo $_SERVER["PHP_SELF"]."?id=$id"; ?>" method="post">
    <input type="text" name="nombre" value="<?php echo $nombre;?>" style="width : 280px" placeholder="Ingrese nombre"><br><br>
    <input type="text" name="apellido" value="<?php echo $apellido;?>" style="width : 280px" placeholder="Ingrese apellido"><br><br>
    <input type="text" name="correoElectronico" value="<?php echo $correoElectronico;?>" style="width : 280px;" name="correoElectronico" placeholder="Ingrese email"><br><br>
    <input type="hidden" name="password" value="<?php echo $password;?>" style="width : 280px;" placeholder="Ingrese password"><br><br>
    <!--<input type="text" name="genero" style="width : 280px;" placeholder="Ingrese genero"><br><br>-->
    <input type="text" name="telefono" value="<?php echo $telefono;?>" style="width : 280px;" placeholder="Ingrese telefono"><br><br>
    Genero: <input type="radio" name="genero" value="Masculino"<?php echo($genero=="Masculino"?"checked":"")?>>Masculino
    <input type="radio" name="genero" value="Femenino"<?php echo($genero=="Femenino"?"checked":"")?>>Femenino <br><br>
    <input type="text" name="tipo" value="<?php echo $tipo;?>" style="width : 280px;" placeholder="Ingrese tipo de usuario"><br><br>
    <input type="submit" value="Actualizar">
</form>

<?php
    if(!empty($_POST)){
        //$id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correoElectronico = $_POST["correoElectronico"];
        $password = $_POST["password"];
        $telefono = $_POST["telefono"];
        $genero = $_POST["genero"];
        $tipo = $_POST["tipo"];


        require_once "controladores/UsuarioController.php";

        $uc = new UsuarioController();
        $resultado = $uc->actualizar($id, $nombre, $apellido,  $correoElectronico, $telefono, $genero, $tipo);
     
        if($resultado!=0){
            header("location: mostrar.php?id=$id");
        }else{
            echo "Error: no han actualizado los datos";
        }            
           
    }
?>