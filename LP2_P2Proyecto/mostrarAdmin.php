<?php
session_start();
if($_SESSION["tipo"]!="administrador"){
    echo "<h1>Usted no es administrador</h1>";
    echo "<a href='bienvenido.php'>Regresar a tu cuenta</a>";
    return;
}
    require_once "controladores/UsuarioController.php";
    require_once "controladores/CitaController.php";

    $uc = new UsuarioController();
    $resultado = $uc->usuarios();

        ?>
<title>INTERFAZ ADMINISTRATIVA</title>

       ADMINISTRACIÓN DE USUARIOS
       <?php
    echo "<br>";
    echo "<br>";
    ?>
        <table border="5">
            <tr>
               <th>ID</th> 
               <th>NOMBRE</th>
               <th>APELLIDO</th>
               <th>CORREO ELECTRONICO</th> 
               <th>GENERO</th>  
               <th>TELEFONO</th>
               <th>ACTUALIZAR</th>
               <th>ELIMINAR</th>
            <tr>
        <?php
        foreach($resultado as $usuario){
            echo "<tr>
                    <td>".$usuario["id"]."</td>
                    <td>".$usuario["nombre"]."</td>
                    <td>".$usuario["apellido"]."</td>
                    <td>".$usuario["correoElectronico"]."</td>
                    <td>".$usuario["genero"]."</td>
                    <td>".$usuario["telefono"]."</td>
                    <td><a href='actualizar.php?id=".$usuario["id"]."'>Actualizar</a></td>
                    <td><a href='eliminar.php?id=".$usuario["id"]."'>Eliminar</a></td>
                  </tr>";
        }
    
        $cc = new CitaController();
        $resultado = $cc->citas();
        ?>

      

        </table>
        <br><br>
        ADMINISTRACIÓN DE CITAS
       <?php
        echo "<br>";
        echo "<br>";
        ?>

        <table border="5">
            <tr>
               <th>ID</th> 
               <th>FECHA</th>
               <th>HORA</th>
               <th>MOTIVO</th> 
               <th>ID DEL USUARIO</th>
               <th>ACTUALIZAR</th>
               <th>ELIMINAR</th>    
               
            <tr>
        <?php
        foreach($resultado as $cita){
            echo "<tr>
                    <td>".$cita["id"]."</td>
                    <td>".$cita["fecha"]."</td>
                    <td>".$cita["hora"]."</td>
                    <td>".$cita["motivo"]."</td>
                    <td>".$cita["usuario_id"]."</td>
                    
                    <td><a href='actualizarCitas.php?id=".$cita["id"]."'>Actualizar</a></td>
                    <td><a href='eliminar.php?id=".$cita["id"]."'>Eliminar</a></td>
                  </tr>";
        }