<?php
session_start();
include './class/Usuarios.php';
Usuarios::cerrarSesion();
header('location: login.php');
