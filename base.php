<?php
$mysqli = new mysqli("localhost", "documentos_ow", "contraseña", "docws2022A");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
?>