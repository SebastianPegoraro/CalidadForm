<?php
require_once 'Jurisdiccion.php';
require_once 'Responsable.php';
require_once 'Tramite.php';
require_once 'Accion.php';

if (isset($_REQUEST['guardar'])){
    //Jurisdiccion
    $numero = $_POST['numero'];
    $denominacion = $_POST['denominacion'];

    $jurisdiccion = Jurisdiccion::buscarPorNumero($numero);
    $idJurisdiccion = $jurisdiccion->getId();

    //Responsable
    $nomyape = $_POST['nomyape'];
    $oficina = $_POST['oficina'];
    $correotel = $_POST['correotel'];
    $dni = $_POST['dni'];
    $fecha = $_POST['fecha'];

    $responsable = new Responsable($nomyape, $correotel, $oficina, $dni, $fecha);
    $responsable->guardarResponsable();
    $idResponsable = $responsable->getId();

    //Tramite
    $accion = $_POST['accion'];
    $asunto = $_POST['asunto'];
    $causa = $_POST['causa'];
    $descripcion = $_POST['descripcion'];

    $idTramites = array();

    for ($i=0; $i<count($accion); $i++){
        $tramite = new Tramite($accion[$i], $asunto[$i], $causa[$i], $descripcion[$i]);
        //die(var_dump($tramite));
        $tramite->guardarTramite();
        array_push($idTramites, $tramite->getId());
        //die(var_dump($tramite));
    }

    for ($i=0; $i<count($idTramites); $i++){
        $accion = new Accion($idResponsable,$idJurisdiccion, null, null, $idTramites[$i]);
        $accion->guardarAccion();
    }

    header('Location: ../gestionTramite.php?save');

}