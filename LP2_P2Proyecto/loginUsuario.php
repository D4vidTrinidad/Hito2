<h1>Inicie sesion para ver sus citas</h1>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <input type="text" name="correoElectronico" placeholder="Ingrese email"><br>
    <input type="password" name="password" placeholder="Ingrese password"><br>
    <input type="submit" value="ingresar"><br>
</form>
<?php
    //echo password_hash("123456",PASSWORD_DEFAULT);//
    
    if(!empty($_POST)){
        $correoElectronico = trim ($_POST["correoElectronico"]);
        $password = trim ($_POST["password"]);
        $errores = 0;

        if($correoElectronico==""){
            echo "Ingrese email<br>";
            $errores ++;
        }

        if($password==""){
            echo "Ingrese contraseña<br>";
            $errores ++;
        }
        
        if($errores==0){
           
        require_once "controladores/UsuarioController.php";

        $ac = new UsuarioController();
        $resultado = $ac->login($correoElectronico, $password);
        
        if($resultado!=0){
            header("location: bienvenido.php");
        }else{
            echo "usuario y/o contraseña incorrectos";
        }
        
        }
    }
?>