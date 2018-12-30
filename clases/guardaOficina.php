<?php
require_once 'Jurisdiccion.php';
require_once 'Responsable.php';
require_once 'Oficina.php';
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

    //die(var_dump($idJurisdiccion, $idResponsable));

    //Oficina
    $numeroOficina = $_POST['numeroOficina'];
    $denominacionOficina = $_POST['denominacionOficina'];
    $gestion = $_POST['gestion'];
        
    if(isset($_POST['solicitahab'])){
        $solicita = $_POST['solicitahab'];
        $oficina = new Oficina($numeroOficina, $denominacionOficina, $gestion, $solicita);
        $oficina->guardarOficina();
        $idOficina = $oficina->getId();
    } else if(isset($_POST['solicitamod'])){
        $solicita = $_POST['solicitamod'];
        $oficina = new Oficina($numeroOficina, $denominacionOficina, $gestion, $solicita);
        $oficina->guardarOficina();
        $idOficina = $oficina->getId();
    } else if(isset($_POST['solicitainhab'])){
        $solicita = $_POST['solicitainhab'];
        $oficina = new Oficina($numeroOficina, $denominacionOficina, $gestion, null, $solicita);
        $oficina->guardarOficina();
        $idOficina = $oficina->getId();
    }

    $accion = new Accion($idResponsable,$idJurisdiccion, null, $idOficina, null, null);
    $accion->guardarAccion();


    header('Location: ../gestionOficina.php?save');

}