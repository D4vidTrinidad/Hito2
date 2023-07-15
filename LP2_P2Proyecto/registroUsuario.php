<title>REGISTRESE :D</title>
<h1>Bienvenido,registrese para continuar</h1>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
  <input type="text" name="nombre" style="width : 280px" placeholder="Ingrese nombre"><br><br>
  <input type="text" name="apellido" style="width : 280px" placeholder="Ingrese apellido"><br><br>
  <input type="text" name="correoElectronico" style="width : 280px;" name="correoElectronico" placeholder="Ingrese email"><br><br>
  <input type="password" name="password" style="width : 280px;" placeholder="Ingrese password"><br><br>
  <!--<input type="text" name="genero" style="width : 280px;" placeholder="Ingrese genero"><br><br>-->
  <input type="text" name="telefono" style="width : 280px;" placeholder="Ingrese telefono"><br><br>
  Genero: <input type="radio" name="genero" value="Masculino">Masculino
  <input type="radio" name="genero" value="Femenino">Femenino <br><br>

  <input type="submit" value="Guardar">
</form>
<?php
if (!empty($_POST)) {
  $nombre = trim($_POST["nombre"]);
  $apellido = trim($_POST["apellido"]);
  $correoElectronico = trim($_POST["correoElectronico"]);
  $password = trim($_POST["password"]);
  $genero = trim($_POST["genero"]);
  $telefono = trim($_POST["telefono"]);
  $tipo = "cliente";
  $errores = 0;


  if (strlen($password) < 8) {
    echo "<p>la contraseña debe tener al menos 8 carateres";
    $errores++;
  }

  $patron_correoElectronico = "/^\\S+@\\S+\\.\\S+$/";
  if (preg_match($patron_correoElectronico, $correoElectronico) == 0) {
    echo "<p>el email no es correcto</p>";
    $errores++;
  }

  if ($errores == 0) {
    try {
      require_once "controladores/UsuarioController.php";
      $uc = new usuarioController();
      $resultado = $uc->guardar($nombre, $apellido, $correoElectronico, $password, $genero, $telefono, $tipo);

      if ($resultado != 0) {
        $resultado = $uc->login($correoElectronico, $password);

        if ($resultado != 0) {
          header("location: bienvenido.php");
        } else {
          header("location: loginUsuario.php");
        }
      } else {
        echo "usuario y/o contraseña incorrectos";
      }
    } catch (Error $e) {
      echo "<div style='color:red'>ha ocurrido un error </dir>";
      echo $e->getMessage();
    } catch (Exception $ex) {
      echo $ex->getMessage();
      echo "<div style='color:yellow'>ha ocurrido un excepcion </dir>";
    }
  }
}
?>