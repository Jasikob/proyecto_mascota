<?php
$link = mysqli_connect("localhost", "root", "", "jesus_mascota");
if (!$link) {
die('Error de Conexión (' . mysqli_connect_errno() . ') '
. mysqli_connect_error());
}

?>