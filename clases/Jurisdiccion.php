<?php
require_once 'Connect.php';

class Jurisdiccion {
    private $id;
    private $numero;
    private $denominacion;
    const TABLA = 'jurisdicciones';

    public function getId() {
        return $this->id;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getDenominacion() {
        return $this->denominacion;
    }

    public function setDenominacion($denominacion) {
        $this->denominacion = $denominacion;
    }

    public function __construct($numero, $denominacion, $id=null) {
        $this->numero = $numero;
        $this->denominacion = $denominacion;
        $this->id = $id;
    }

    public function guardar() {
        $conexion = new Connect();
        if ($this->id) /* Modifica */ {
            $consulta = $conexion->prepare('UPDATE '.self::TABLA.' SET numero = :numero, denominacion = :denominacion WHERE id = :id');
            $consulta->bindParam(':numero', $this->numero);
            $consulta->bindParam(':denominacion', $this->denominacion);
            $consulta->bindParam(':id', $this->id);
            $consulta->execute();
        } else {
            $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (numero, denominacion) VALUES (:numero, :denominacion)');
            $consulta->bindParam(':numero', $this->numero);
            $consulta->bindParam(':denominacion', $this->denominacion);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
        }
        $conexion = null;
    }

    public function buscarPorId($id) {
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT numero, denominacion FROM '.self::TABLA.' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self($registro['numero'], $registro['denominacion'], $id);
        } else {
            return false;
        }
    }

}

?>