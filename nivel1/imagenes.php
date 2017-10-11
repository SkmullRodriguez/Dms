<?php
include '../class/Database.php';
include '../class/nivel1.php';

$nivel = new nivel1();
$row = $nivel->letra($_GET["letra"]);
echo "<img src=".$row[0]->ruta." WIDTH='400' HEIGHT='280' BORDER='2' VSPACE='3' HSPACE='3' ALIGN='center' class='img-thumbnail' />";
