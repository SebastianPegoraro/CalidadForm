<?php
    require_once 'clases/Accion.php';
require_once 'clases/Jurisdiccion.php';
require_once 'clases/Responsable.php';

$accionesTramites = Accion::showTramites();
//Responsable
foreach($accionesTramites as $contenido){
    $jurisdiccion = Jurisdiccion::buscarPorId($contenido['id_jurisdiccion']);
    $responsable = Responsable::buscarPorId($contenido['id_responsable']);
    die(var_dump($contenido['id_jurisdiccion']));
    ?>
            <td><?php echo $jurisdiccion->getDenominacion(); ?></td>
            <td><?php echo $responsable->getNombre(); ?></td>
            <td><?php echo $responsable->getOficina(); ?></td>
    <?php
}

//die(var_dump($idResponsable));
    echo $responsable->getId();
?>