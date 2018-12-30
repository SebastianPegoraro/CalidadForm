<?php
require_once 'Connect.php';

class Oficina {
    private $id;
    private $numero;
    private $denominacion;
    private $opcion;
    private $categoria;
    private $cuofDestino;
    const TABLA = 'oficinas';

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

    public function getOpcion() {
        return $this->opcion;
    }

    public function setOpcion($opcion) {
        $this->opcion = $opcion;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getCuofDestino() {
        return $this->cuofDestino;
    }

    public function setCuofDestino($cuofDestino) {
        $this->cuofDestino = $cuofDestino;
    }

    public function __construct($numero, $denominacion, $opcion, $categoria=null, $cuofDestino=null, $id=null) {
        $this->numero = $numero;
        $this->denominacion = $denominacion;
        $this->opcion = $opcion;
        $this->categoria = $categoria;
        $this->cuofDestino = $cuofDestino;
        $this->id = $id;
    }

    public function guardarOficina() {
        $conexion = new Connect();
        if ($this->id) {
            $consulta = $conexion->prepare('UPDATE '.self::TABLA.' SET numero = :numero, denominacion = :denominacion, opcion = :opcion, categoria = :categoria, cuof_destino = :cuofDestino WHERE id_oficina = :id');
            $consulta->bindParam(':numero', $this->numero);
            $consulta->bindParam(':denominacion', $this->denominacion);
            $consulta->bindParam(':opcion', $this->opcion);
            $consulta->bindParam(':categoria', $this->categoria);
            $consulta->bindParam(':cuofDestino', $this->cuofDestino);
            $consulta->bindParam(':id', $this->id);
            $consulta->execute();
        } else {
            $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (numero, denominacion, opcion, categoria, cuof_destino) VALUES (:numero, :denominacion, :opcion, :categoria, :cuofDestino)');
            $consulta->bindParam(':numero', $this->numero);
            $consulta->bindParam(':denominacion', $this->denominacion);
            $consulta->bindParam(':opcion', $this->opcion);
            $consulta->bindParam(':categoria', $this->categoria);
            $consulta->bindParam(':cuofDestino', $this->cuofDestino);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
        }
        $conexion = null;
    }

    public function buscarPorId($id) {
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT numero, denominacion, opcion, categoria, cuof_destino FROM '.self::TABLA.' WHERE id_oficina = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self($registro['numero'], $registro['denominacion'], $registro['opcion'], $registro['categoria'], $registro['cuof_destino'], $id);
        } else {
            return false;
        }
    }
}

?>