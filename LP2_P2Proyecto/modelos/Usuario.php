<?php

require_once "Conn.php";

class Usuario{
    private $nombre;
    private $apellido;
    private $correoElectronico;
    private $password;
    private $genero;
    private $telefono;
    private $tipo;
    
    public function mostrar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM usuario";
        
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado->fetchAll();
    }

    public function mostrarMedico(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM usuario WHERE tipo='medico'";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
      
        return $resultado->fetchAll();
        
    }

    public function mostrarPorId($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM usuario WHERE id=$id";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function guardar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO usuario(nombre,apellido, correoElectronico, password, genero, telefono,tipo) 
                VALUES('".$this->nombre."','".$this->apellido."','".$this->correoElectronico."','".$this->password."','".$this->genero."','".$this->telefono."','".$this->tipo."')";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function actualizar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE usuario 
                SET  nombre='".$this->nombre."', apellido='".$this->apellido."', correoElectronico='".$this->correoElectronico."', genero='".$this->genero."', telefono=".$this->telefono.",  tipo='".$this->tipo."' WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function buscarEmail(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM usuario WHERE correoElectronico='".$this->correoElectronico."'";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function eliminar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM usuario WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setCorreoElectronico($correoElectronico){
        $this->correoElectronico = $correoElectronico;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

}