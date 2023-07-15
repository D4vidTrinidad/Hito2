<?php

require_once "modelos/Cita.php";

class CitaController{
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
    public function guardar($fecha, $hora, $motivo, $usuario_id){
        $cita = new Cita();
        $cita->setFecha($fecha);
        $cita->setHora($hora);
        $cita->setMotivo($motivo);
        /*$usuario->setPassword(password_hash($password,PASSWORD_BCRYPT));*/
        $cita->setUsuario_id($usuario_id);

        
        return $cita->guardar();
    }

    public function citas(){
        $cita = new Cita();
        return $cita->mostrar();
        
    }

    public function buscarcitas($id){
        $cita = new Cita();
        return $cita->buscarcita($id);
        
        
    }

    public function buscarcita($id){
        $cita = new Cita();
        return $cita->mostrarPorId($id);
        
        
    }
    public function actualizar($id, $fecha, $hora, $motivo){
        $cita = new Cita();
        $cita->setFecha($fecha);
        $cita->setHora($hora);
        $cita->setMotivo($motivo);
        //$usuario->setPassword(password_hash($password,PASSWORD_BCRYPT));
        //$cita->setUsuario_id($usuario_id);

        $resultado = $cita->actualizar($id);
        return $resultado;
    }
}