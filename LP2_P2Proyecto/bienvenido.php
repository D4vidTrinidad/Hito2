<title>BIENVENIDO</title>
<?php
    session_start();
    if(!isset($_SESSION["id"])){
        header("location:loginUsuario.php");
    }
    echo "<h1>Bienvenid@ ".$_SESSION["nombre"]."</h1>";
    echo "<h2>".$_SESSION["tipo"]."<h2>";

    if($_SESSION["tipo"]=="administrador"){
        echo "<li><a href='mostrarAdmin.php'>Editar usuarios y citas</a></li>";
        echo "<br>";
        //echo "<li><a href='mostrarCliente.php'>Ver Cliente</a></li>";
        echo "<li><a href='mostrarMedico.php'>Ver Citas</a></li>";
        echo "<br>";
        echo "<li><a href='mostrarRecep.php'>Ver Recepcion</a></li>";
        echo "<br>";

    }else if ($_SESSION["tipo"]=="medico" ){
        echo "<li><a href='mostrarMedico.php'>Ver citas</a></li>";
        

    }else if ($_SESSION["tipo"]=="recepcionista" ){
        echo "<li><a href='mostrarRecep.php'>Ver citas</a></li>";

    }else{
        echo "<li><a href='mostrarCliente.php'>Ver citas</a></li>";
        

    }
    
    



?>
<a href="logout.php">logout</a>


