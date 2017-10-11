<?php 
session_start();
if(!$_SESSION['permitido']){
    header('location: ../login.php');
}
?>
<html>
    <head>
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <style>
             
            .footer{
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 30px;
                background-color: #f5f5f5;
            }
            
             .fila1
            {  margin: 5;
                margin-top: 40;
                margin-bottom: 40;
                margin-left: 60;
                margin-right: 45;
                float: center;
            }
               .footer div{
                margin: 0 auto;
                text-align: left;
                line-height: 30px;
                width: 100%;
                background-color: floralwhite; 
            }
            body{
              	background-image: url(../imagenes/fondos/gf.jpg);
            }
            html{
                position: relative;
             	min-height: 100%;
       
	     }

        </style>
            </head>
    <body>
        <header class="container-fluid">
         <nav class="navbar navbar-default">
          
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle='collapse' data-target='#barra'>
                        <span class="sr-only">Menu para movil</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <a href="http://localhost:8080/integrador/index.php">
                       <img src='../imagenes/bb1.jpg' WIDTH=80 HEIGHT=50  VSPACE=3 HSPACE=3>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="barra">
                    <ul class="nav navbar-nav">
<!--                        <li class="active"><a href="#">Inicio</a></li>-->
                <li><a href="http://localhost:8080/integrador/manualUso.php"id="mostrar" >Ayuda</a></li>
                       
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle='dropdown' role="button">
                                Perfil <span class="caret"></span>
<!--                                glyphicon glyphicon-remove-->
                            </a>
                            
<!--//                            include '/class/Database.php';
//                            include '/class/nivel1.php';
//                                $n=new usuarios();
//                                $nom=$n->user;
//                                foreach ($nom as $nombre){-->
                            <ul class="dropdown-menu" role='menu'>
                                <li><a href="#">nombre</a></li>
                                <li><a href="http://localhost:8080/integrador/cerrar-session.php">Salir</a></li>
                            </ul>
                    <!-- cierre de php -->
                        </li>
                    </ul>
                </div>
       </nav>
        <div class="global">
            <div class="fila1">
                <div class="center-block jumbotron">
                    <IMG SRC="../imagenes/sonrisa.jpg" WIDTH=300 HEIGHT=220 BORDER=2 VSPACE=3 HSPACE=3" ALIGN="right" class="img-thumbnail">
                    <h1>Introduccion al Nivel 1</h1>
                <p>En este nivel usted como usuario podra aprender la forma de hacer con lenguaje de
                    señas las letras de abecedario.<br><br>
                
                    Da clic en iniciar y aperturate a tu experiencia.</p><br>
                <a href="http://localhost:8080/integrador/nivel1/iniciar.php" class="btn btn-primary btn-lg" role="button">Iniciar</a><br><br>
                <a href="http://localhost:8080/integrador/nivel1/evaluacion.php" class="btn btn-primary btn-lg" role="button">Evaluacion</a>
                <a href="http://localhost:8080/integrador/index.php" class="btn btn-primary btn-lg" role="button">Menu Principal</a>
                <!--               
77365536-->
                
                </div>
            </div>
            </div>
            <div class="footer">
            <div class="f-content">
            Todos los derechos reservados <a href="#">@DAWTEC</a>
            </div>
            </div>
                    </header>