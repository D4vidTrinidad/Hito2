<?php

require_once "modelos/Usuario.php";

class UsuarioController{
    public function login($setCorreoElectronico, $password){
        $usuario = new Usuario();
        $usuario->setCorreoElectronico($setCorreoElectronico);
        
        $resultado = $usuario->buscarEmail();

        $contador = 0;
        $contraseñadb = null;
        $idUsuario = null;
        $nombreUsuario = null;
        $tipo = null;
        
        foreach($resultado as $usuario){
            $contador++;
            if($contador!=0){
                $hashdb = $usuario["password"];
                $idUsuario = $usuario["id"];
                $nombreUsuario = $usuario["nombre"];
                $tipo = $usuario["tipo"];
                //$hashdb = $usuario["password"];
            }   
        }
        if($contador!=0){
            if(!password_verify($password,$hashdb)){
                return 0;
            }else{
                session_start();
                $_SESSION["id"]=$idUsuario;
                $_SESSION["nombre"]=$nombreUsuario;
                $_SESSION["tipo"]=$tipo;
                return 1;
        }
        }
        return $contador;
    }
    public function guardar($nombre, $apellido, $correoElectronico, $password, $genero, $telefono){
        $usuario = new Usuario();
        $usuario->setNombre($nombre);
        $usuario->setApellido($apellido);
        $usuario->setCorreoElectronico($correoElectronico);
        $usuario->setPassword(password_hash($password,PASSWORD_BCRYPT));
        $usuario->setGenero($genero);
        $usuario->setTelefono($telefono);
        
        return $usuario->guardar();
    }

    public function usuarios(){
        $usuario = new Usuario();
        return $usuario->mostrar();
        
    }
    public function actualizar($id, $nombre, $apellido,  $correoElectronico, $telefono, $genero, $tipo){
        $usuario = new Usuario();
        $usuario->setNombre($nombre);
        $usuario->setApellido($apellido);
        $usuario->setCorreoElectronico($correoElectronico);
        //$usuario->setPassword(password_hash($password,PASSWORD_BCRYPT));
        $usuario->setGenero($genero);
        $usuario->setTelefono($telefono);
        $usuario->setTipo($tipo);
        
        $resultado = $usuario->actualizar($id);
        return $resultado;
    }

    public function Medico(){
        $usuario = new Usuario();
        return $usuario->mostrarMedico();
    }

    

}