<?php
include '../class/Database.php';
include '../class/video.php';

$nivel = new video();
$row = $nivel->nombre($_GET["nombre"]);
echo "<video src=".$row[0]->ruta." controls autoplay loop WIDTH=400 HEIGHT=320 </video>";
