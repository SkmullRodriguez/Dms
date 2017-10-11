<?php
include '../class/Database.php';
include '../class/nivel2.php';

$nivel = new nivel2();
$row = $nivel->nombre($_GET["nombre"]);
echo "<img src=".$row[0]->ruta." WIDTH='400' HEIGHT='320' BORDER='2' VSPACE='3' HSPACE='3' class='img-thumbnail'>";
