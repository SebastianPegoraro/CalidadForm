<?php
require_once 'Connect.php';

class Tramite {
    private $id;
    private $accion;
    private $asunto;
    private $causa;
    private $descripcion;
    private $campo1;
    private $campo2;
    private $campo3;
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

    public function getCampo1() {
        return $this->campo1;
    }

    public function setCampo1($campo1) {
        $this->campo1 = $campo1;
    }

    public function getCampo2() {
        return $this->campo2;
    }

    public function setCampo2($campo2) {
        $this->campo2 = $campo2;
    }

    public function getCampo3() {
        return $this->campo3;
    }

    public function setCampo3($campo3) {
        $this->campo3 = $campo3;
    }

    public function __construct($accion, $asunto, $causa, $descripcion, $campo1, $campo2, $campo3, $id=null) {
        $this->accion = $accion;
        $this->asunto = $asunto;
        $this->causa = $causa;
        $this->descripcion = $descripcion;
        $this->campo1 = $campo1;
        $this->campo2 = $campo2;
        $this->campo3 = $campo3;
        $this->id = $id;
    }

    public function guardarTramite() {
        $conexion = new Connect();
        if ($this->id) {
            $consulta = $conexion->prepare('UPDATE '.self::TABLA.' SET accion = :accion, asunto = :asunto, causa = :causa, descripcion = :descripcion, campo1 = :campo1, campo2 = :campo2, campo3 = :campo3 WHERE id = :id');
            $consulta->bindParam(':accion', $this->accion);
            $consulta->bindParam(':asunto', $this->asunto);
            $consulta->bindParam(':causa', $this->causa);
            $consulta->bindParam(':descripcion', $this->descripcion);
            $consulta->bindParam(':campo1', $this->campo1);
            $consulta->bindParam(':campo2', $this->campo2);
            $consulta->bindParam(':campo3', $this->campo3);
            $consulta->bindParam(':id', $this->id);
            $consulta->execute();
        }else {
            $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (accion, asunto, causa, descripcion, campo1, campo2, campo3) VALUES (:accion, :asunto, :causa, :descripcion, :campo1, :campo2, :campo3)');
            $consulta->bindParam(':accion', $this->accion);
            $consulta->bindParam(':asunto', $this->asunto);
            $consulta->bindParam(':causa', $this->causa);
            $consulta->bindParam(':descripcion', $this->descripcion);
            $consulta->bindParam(':campo1', $this->campo1);
            $consulta->bindParam(':campo2', $this->campo2);
            $consulta->bindParam(':campo3', $this->campo3);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
        }
        $conexion = null;
    }

    public function buscarPorId($id) {
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT accion, asunto, causa, descripcion, campo1, campo2, campo3 FROM '.self::TABLA.' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self($registro['accion'], $registro['asunto'], $registro['causa'], $registro['descripcion'], $registro['campo1'], $registro['campo2'], $registro['campo3'], $id);            
        } else {
            return false;
        }
    }
    
}

?>