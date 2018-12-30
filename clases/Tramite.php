<?php
require_once 'Connect.php';

class Tramite {
    private $id;
    private $accion;
    private $asunto;
    private $causa;
    private $descripcion;
    const TABLA = 'tramites';

    public function getId() {
        return $this->id;
    }

    public function getAccion() {
        return $this->accion;
    }

    public function setAccion($accion) {
        $this->accion = $accion;
    }

    public function getAsunto() {
        return $this->asunto;
    }

    public function setAsunto($asunto) {
        $this->asunto = $asunto;
    }

    public function getCausa() {
        return $this->causa;
    }

    public function setCausa($causa) {
        $this->causa = $causa;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function __construct($accion, $asunto, $causa, $descripcion, $id=null) {
        $this->accion = $accion;
        $this->asunto = $asunto;
        $this->causa = $causa;
        $this->descripcion = $descripcion;
        $this->id = $id;
    }

    public function guardarTramite() {
        $conexion = new Connect();
        if ($this->id) {
            $consulta = $conexion->prepare('UPDATE '.self::TABLA.' SET accion = :accion, asunto = :asunto, causa = :causa, descripcion = :descripcion, WHERE id = :id');
            $consulta->bindParam(':accion', $this->accion);
            $consulta->bindParam(':asunto', $this->asunto);
            $consulta->bindParam(':causa', $this->causa);
            $consulta->bindParam(':descripcion', $this->descripcion);
            $consulta->bindParam(':id', $this->id);
            $consulta->execute();
        }else {
            $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (accion, asunto, causa, descripcion) VALUES (:accion, :asunto, :causa, :descripcion)');
            $consulta->bindParam(':accion', $this->accion);
            $consulta->bindParam(':asunto', $this->asunto);
            $consulta->bindParam(':causa', $this->causa);
            $consulta->bindParam(':descripcion', $this->descripcion);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
        }
        $conexion = null;
    }

    public function buscarPorId($id) {
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT accion, asunto, causa, descripcion FROM '.self::TABLA.' WHERE id_tramite = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self($registro['accion'], $registro['asunto'], $registro['causa'], $registro['descripcion'], $id);
        } else {
            return false;
        }
    }
    
}

?>