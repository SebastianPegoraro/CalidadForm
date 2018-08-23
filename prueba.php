<?php
    require_once 'clases/Jurisdiccion.php';
    $jur = Jurisdiccion::buscarPorNumero(2);
    if ($jur) {
        echo $jur->getDenominacion();
    }
?>