<?php 
session_start();
if(!$_SESSION['permitido']){
    header('location: login.php');
}
?>
<html>
    <head>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <script>
        </script>
        <style>
            
            html{
                position: relative;
                min-height: 100%;
            }
        
            body{
              background-image: url(imagenes/fondos/gf.jpg);
            }
            .footer{
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 30px;
                
   }
            .footer div{
                margin: 0 auto;
                text-align: left;
                line-height: 30px;
                width: 100%;
                background-color: floralwhite; 
            }
         .menus
               {
                float: left;
                margin-top: 35;
                margin-left: 110;
                margin-right: 50;
                margin-bottom: 5;
                margin: 15;
                text-align: center;
                line-height: 30px;/*
                background-color: #f5f5f5;*/
                padding: 10;
                width: 20%;
                display: inline-block;
                color: 7EDEF2;
            }
            .introduccion{
                margin: 0 auto;
                margin-top: 50;
                margin-left: 70;
                padding: 10;
                display: inline-block;                
                width: 60%;
                float: center;
                padding-top: 50px;
            }
            .text{
                margin: 0 auto;
                margin-left: 225;
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
                    <img src='imagenes/bb1.jpg' WIDTH=80 HEIGHT=50  VSPACE=3 HSPACE=3>
                   
                </div>
                <div class="navbar-collapse collapse" id="barra">
                    <ul class="nav navbar-nav">
<!--                        <li class="active"><a href="#">Inicio</a></li>-->
                    <li><a href="manualUso.php"id="mostrar" >Ayuda</a></li>
               
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
                                <li><a href="cerrar-session.php">Salir</a></li>
                            </ul>
                    <!-- cierre de php -->
                        </li>
                    </ul>
                </div>

        </nav>
        <div class="global">
            <div class="menus">
                <p><h1>Niveles</h1></p><br>
                <a href="nivel1/introduccion.php" class="btn btn-primary btn-lg" role="button">Iniciar nivel 1</a><br><br>
                <a href="nivel2/introduccion.php" class="btn btn-primary btn-lg" role="button">Iniciar nivel 2</a><br><br>
                <a href="nivel3/introduccion.php" class="btn btn-primary btn-lg" role="button">Iniciar nivel 3</a><br><br>
                <a href="nivel4/introduccion.php" class="btn btn-primary btn-lg" role="button">Iniciar nivel 4</a><br><br><br><br>
                <a href="video/iniciar.php" class="btn btn-primary btn-lg" role="button">Videos adicionales</a><br><br>
</div>          
    </div>     
        
            <div class="introduccion">
                <div class="jumbotron">
                    <IMG SRC="imagenes/holalse.jpg" WIDTH=220 HEIGHT=200 BORDER=2 VSPACE=3 HSPACE=3" ALIGN="left">
                    <h1>Bienvenid@s</h1><br>
                    <p class="text">A una nueva experiencia de aprendizaje DEAF-MUTE SYSTEM donde 
                        conoceras del lenguaje de señas, de forma interactiva.<br><br>
                    Elige el primer nivel para iniciar tu experiencia.</p>
                </div>
            </div>            
            <div class="footer">
            <div class="f-content">
            Todos los derechos reservados <a href="#">@DAWTEC</a>
            </div>
          
            </div> 
        </header>
    </body>
    </html>
