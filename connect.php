<?php
global $dbh;

try {
  //mysql:host=HOST;dbname=NOMBRE_DB', 'USUARIO', 'PASSWORD'
  $dbh = new PDO('mysql:host=localhost;dbname=formularios_sgt', 'root', 'admin123');
} catch(Exception $e) {
  exit("Error conectando al Servidor");
}
?>