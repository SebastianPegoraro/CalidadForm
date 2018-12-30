<?php
require_once 'Connect.php';

class Accion
{
    private $idAccion;
    private $idOficina;
    private $idTramite;
    private $idUsuario;
    private $idResponsable;
    private $idJurisdiccion;
    const TABLA = 'acciones';

    /**
     * Accion constructor.
     * @param $idOficina
     * @param $idTramite
     * @param $idUsuario
     * @param $idResponsable
     * @param $idJurisdiccion
     */
    public function __construct($idResponsable, $idJurisdiccion, $idAccion=null, $idOficina=null, $idTramite=null, $idUsuario=null)
    {
        $this->idOficina = $idOficina;
        $this->idTramite = $idTramite;
        $this->idUsuario = $idUsuario;
        $this->idResponsable = $idResponsable;
        $this->idJurisdiccion = $idJurisdiccion;
        $this->idAccion = $idAccion;
    }

    /**
     * @return mixed
     */
    public function getIdAccion()
    {
        return $this->idAccion;
    }

    /**
     * @param mixed $idAccion
     */
    public function setIdAccion($idAccion)
    {
        $this->idAccion = $idAccion;
    }

    /**
     * @return mixed
     */
    public function getIdOficina()
    {
        return $this->idOficina;
    }

    /**
     * @param mixed $idOficina
     */
    public function setIdOficina($idOficina)
    {
        $this->idOficina = $idOficina;
    }

    /**
     * @return mixed
     */
    public function getIdTramite()
    {
        return $this->idTramite;
    }

    /**
     * @param mixed $idTramite
     */
    public function setIdTramite($idTramite)
    {
        $this->idTramite = $idTramite;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return mixed
     */
    public function getIdResponsable()
    {
        return $this->idResponsable;
    }

    /**
     * @param mixed $idResponsable
     */
    public function setIdResponsable($idResponsable)
    {
        $this->idResponsable = $idResponsable;
    }

    /**
     * @return mixed
     */
    public function getIdJurisdiccion()
    {
        return $this->idJurisdiccion;
    }

    /**
     * @param mixed $idJurisdiccion
     */
    public function setIdJurisdiccion($idJurisdiccion)
    {
        $this->idJurisdiccion = $idJurisdiccion;
    }

    public function guardarAccion(){
        $conexion = new Connect();
        $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (id_oficina, id_tramite, id_usuario, id_responsable, id_jurisdiccion) VALUES (:idOficina, :idTramite, :idUsuario, :idResponsable, :idJurisdiccion)');
        $consulta->bindParam(':idOficina', $this->idOficina);
        $consulta->bindParam(':idTramite', $this->idTramite);
        $consulta->bindParam(':idUsuario', $this->idUsuario);
        $consulta->bindParam(':idResponsable', $this->idResponsable);
        $consulta->bindParam(':idJurisdiccion', $this->idJurisdiccion);
        $consulta->execute();
        $this->idAccion = $conexion->lastInsertId();

        $conexion = null;
    }

    //busca todos los Tramites existentes
    public function showTramites(){
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT * FROM '.self::TABLA.' WHERE id_tramite IS NOT NULL GROUP BY id_responsable DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
        return $registros;
    }

    //busca los tramites especificos de cada 'submit'
    public function findTramite($idResponsable, $idJurisdiccion){
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT id_tramite FROM '.self::TABLA.' WHERE id_responsable = :idResponsable AND id_jurisdiccion = :idJurisdiccion');
        $consulta->bindParam(':idResponsable', $idResponsable);
        $consulta->bindParam(':idJurisdiccion', $idJurisdiccion);
        $consulta->execute();
        $registro = $consulta->fetchAll();
        return $registro;
    }

    //busca todos los Usuarios existentes
    public function showUsuarios(){
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT * FROM '.self::TABLA.' WHERE id_usuario IS NOT NULL GROUP BY id_responsable DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
        return $registros;
    }

    //busca los usuarios especificos de cada 'submit'
    public function findUsuario($idResponsable, $idJurisdiccion){
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT id_usuario FROM '.self::TABLA.' WHERE id_responsable = :idResponsable AND id_jurisdiccion = :idJurisdiccion');
        $consulta->bindParam(':idResponsable', $idResponsable);
        $consulta->bindParam(':idJurisdiccion', $idJurisdiccion);
        $consulta->execute();
        $registro = $consulta->fetchAll();
        return $registro;
    }

    //busca todos las Oficinas existentes
    public function showOficinas(){
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT * FROM '.self::TABLA.' WHERE id_oficina IS NOT NULL GROUP BY id_responsable DESC');
        $consulta->execute();
        $registros = $consulta->fetchAll();
        return $registros;
    }

    //busca la oficina especifica del 'submit'
    public function findOficina($idResponsable, $idJurisdiccion){
        $conexion = new Connect();
        $consulta = $conexion->prepare('SELECT id_oficina FROM '.self::TABLA.' WHERE id_responsable = :idResponsable AND id_jurisdiccion = :idJurisdiccion');
        $consulta->bindParam(':idResponsable', $idResponsable);
        $consulta->bindParam(':idJurisdiccion', $idJurisdiccion);
        $consulta->execute();
        $registros = $consulta->fetch();
        return $registros;
    }
}