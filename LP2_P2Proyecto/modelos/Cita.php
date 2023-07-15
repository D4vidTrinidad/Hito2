<?php

require_once "Conn.php";

class Cita{
    private $fecha;
    private $hora;
    private $motivo;
    private $usuario_id;

    public function mostrar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM cita";
        
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado->fetchAll();
    }

    public function mostrarPorId($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM cita WHERE id=$id";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado->fetch();
        return $resultado;
    }

    public function guardar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO cita(fecha,hora, motivo, usuario_id)
                VALUES('".$this->fecha."','".$this->hora."','".$this->motivo."','".$this->usuario_id."')";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function actualizar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE cita 
                SET  fecha='".$this->fecha."', hora='".$this->hora."', motivo='".$this->motivo."' WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function buscarcita($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM cita join usuario on cita.usuario_id=usuario.id WHERE usuario_id=".$id."";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function eliminar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM cita WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }

    public function setMotivo($motivo){
        $this->motivo = $motivo;
    }

    public function setUsuario_id($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    
}