<?php
require_once 'Connect.php';

class Responsable {
    private $id;
    private $nombre;
    private $correoTel;
    private $oficina;
    private $dni;
    private $fecha;
    const TABLA = 'responsable';

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCorreoTel() {
        return $this->correoTel;
    }

    public function setCorreoTel($correoTel) {
        $this->correoTel = $correoTel;
    }

    public function getOficina() {
        return $this->oficina;
    }

    public function setOficina($oficina) {
        $this->oficina = $oficina;
    }

    public function getDni() {
        return $this->dni;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function __construct($nombre, $correoTel, $oficina, $dni, $fecha, $id=null) {
        $this->nombre = $nombre;
        $this->correoTel = $correoTel;
        $this->oficina = $oficina;
        $this->dni = $dni;
        $this->fecha = $fecha;
        $this->id = $id;
    }

    public function guardarResponsable() {
        $conexion = new Connect();
        if ($this->id) {
            $consulta = $conexion->prepare('UPDATE '.self::TABLA.' SET nombre = :nombre, correo_tel = :correoTel, oficina = :oficina, dni = :dni, fecha = :fecha WHERE id = :id');
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':correoTel', $this->correoTel);
            $consulta->bindParam(':oficina', $this->oficina);
            $consulta->bindParam(':dni', $this->dni);
            $consulta->bindParam(':fecha', $this->fecha);
            $consulta->bindParam(':id', $this->id);
            $consulta->execute();
        }else {
            $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (nombre, correo_tel, oficina, dni, fecha) VALUES (:nombre, :correoTel, :oficina, :dni, :fecha)');
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':correoTel', $this->correoTel);
            $consulta->bindParam(':oficina', $this->oficina);
            $consulta->bindParam(':dni', $this->dni);
            $consulta->bindParam(':fecha', $this->fecha);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
        }
        $conexion = null;
    }

    public function buscarPorId($id) {
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT nombre, correo_tel, oficina, dni, fecha FROM '.self::TABLA.' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self($registro['nombre'], $registro['correo_tel'], $registro['oficina'], $registro['dni'], $registro['fecha'], $id);
        } else {
            return false;
        }
    }

}

?>