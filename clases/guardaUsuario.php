<?php
require_once 'Jurisdiccion.php';
require_once 'Responsable.php';
require_once 'Usuario.php';
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

    //Usuario
    $solicita = $_POST['solicita'];
    $udni = $_POST['udni'];
    $nombreyapellido = $_POST['nombreyapellido'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $cuof = $_POST['cuof'];
    $udenominacion = $_POST['udenominacion'];
    $perfil = $_POST['perfil'];

    $idUsuarios = array();

    for ($i=0; $i<count($solicita); $i++){
        $usuario = new Usuario($solicita[$i], $udni[$i], $nombreyapellido[$i], $tel[$i], $email[$i], $cuof[$i], $udenominacion[$i], $perfil[$i]);
        $usuario->guardarUsuario();
        array_push($idUsuarios, $usuario->getId());
        //die(var_dump($usuario->getId()));
    }

    //die(var_dump($idUsuarios));

    for ($i=0; $i<count($idUsuarios); $i++){
        $accion = new Accion($idResponsable,$idJurisdiccion, null, null, null, $idUsuarios[$i]);
        $accion->guardarAccion();
    }

    header('Location: ../gestionUsuario.php?save');

}