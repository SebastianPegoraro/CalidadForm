<?php
require 'Connect.php';
require 'Jurisdiccion.php';

$action = $_REQUEST['action'];

$output_array = array();

switch ($action) {
    case 'getJurName':
        $numeroJur = $_REQUEST['numeroJur'];
        $denominacionJur = Jurisdiccion::buscarPorNumero($numeroJur);
        if ($denominacionJur) {
            $output_array[] = array( 'denominacionJur' => $denominacionJur->getDenominacion());
        }        
        break;
}
echo json_encode( $output_array );
?>