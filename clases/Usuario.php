<?php
require_once 'Connect.php';

class Usuario {
    private $id;
    private $solicita;
    private $dni;
    private $nombre;
    private $telefono;
    private $correo;
    private $cuof;
    private $denominacion;
    private $perfil;
    const TABLA = 'usuarios';

    public function getId() {
        return $this->id;
    }

    public function getSolicita() {
        return $this->solicita;
    }

    public function setSolicita($solicita) {
        $this->solicita = $solicita;
    }

    public function getDni() {
        return $this->dni;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getCuof() {
        return $this->cuof;
    }

    public function setCuof($cuof) {
        $this->cuof = $cuof;
    }

    public function getDenominacion() {
        return $this->denominacion;
    }

    public function setDenominacion($denominacion) {
        $this->denominacion = $denominacion;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    } 

    public function __construct($solicita, $dni, $nombre, $telefono, $correo, $cuof, $denominacion, $perfil, $id=null) {
        $this->solicita;
        $this->dni;
        $this->nombre;
        $this->telefono;
        $this->correo;
        $this->cuof;
        $this->denominacion;
        $this->perfil;
        $this->id;
    }

    public function guardarUsuario() {
        $conexion = new Connect();
        if ($this->id) {
            $consulta = $conexion->prepare('UPDATE '.self::TABLA.' SET solicita = :solicita, dni = :dni, nombre = :nombre, telefono = :telefono, correo = :correo, cuof = :cuof, denominacion = :denominacion, perfil = :perfil WHERE id = :id');
            $consulta->bindParam(':solicita', $this->solicita);
            $consulta->bindParam(':dni', $this->dni);
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':telefono', $this->telefono);
            $consulta->bindParam(':correo', $this->correo);
            $consulta->bindParam(':cuof', $this->cuof);
            $consulta->bindParam(':denominacion', $this->denominacion);
            $consulta->bindParam(':perfil', $this->perfil);
            $consulta->bindParam(':id', $this->id);
            $consulta->execute();
        } else {
            $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (solicita, dni, nombre, telefono, correo, cuof, denominacion, perfil) VALUES (:solicita, :dni, :nombre, :telefono, :correo, :cuof, :denominacion, :perfil)');
            $consulta->bindParam(':solicita', $this->solicita);
            $consulta->bindParam(':dni', $this->dni);
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':telefono', $this->telefono);
            $consulta->bindParam(':correo', $this->correo);
            $consulta->bindParam(':cuof', $this->cuof);
            $consulta->bindParam(':denominacion', $this->denominacion);
            $consulta->bindParam(':perfil', $this->perfil);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
        }
        $conexion = null;
    }

    public function buscarPorId($id) {
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT solicita, dni, nombre, telefono, correo, cuof, denominacion, perfil FROM '.self::TABLA.' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self($registro['solicita'], $registro['dni'], $registro['nombre'], $registro['telefono'], $registro['correo'], $registro['cuof'], $registro['denominacion'], $registro['perfil'], $id);
        } else {
            return false;
        }
    }

}

?>