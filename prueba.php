<?php
 require_once 'clases/Jurisdiccion.php';
 $jur = new Jurisdiccion('2345', 'Encapuchado, disfrazado de murciélago que sale por las noches a combatir el mal.');
 $jur->guardar();
 echo $jur->getNumero() . ' se ha guardado correctamente con el id: ' . $jur->getId();
?>