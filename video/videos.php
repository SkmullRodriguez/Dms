<?php 
session_start();
include '../class/Database.php';
include '../class/video.php';
if(!$_SESSION['permitido']){
    header('location: ../login.php');
}
?>
<html>
    <head>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <style>
            header.container-fluid{
                background-image: url(../imagenes/fondos/muelle.jpg);
            }
             html{
                position: relative;
                min-height: 100%;
            }
            .form-signin{
                text-align: center;
                max-width: 280px;
                margin: 0 auto;
                float: right;            
          text-shadow: black 0.3em 0.3em 0.3em;
            }  
             .form-regis{
                max-width: 380px;
                margin: 0 auto;
                margin-top: 40px;
                float: left;            
            }

            .checkbox{
                margin: 5px;
                padding-left: 20px;
            }
            h1{
                margin:50px auto;
                max-width: 400px;
            }
            .row{
                margin: 30px;
            }
            .jumbotron {
                margin-bottom: 0px;
                background-position: 0% 25%;
                background-size: cover;
                background-repeat: no-repeat;
                background-color: transparent;
                text-align: center;
                text-shadow: black 0.3em 0.3em 0.3em;
            }
            .checkbox{
                text-align: left;
            }
            container{
                text-align: center;
                margin: 10px;
                padding: 50px;
                width: 100%;
            }
            .form-video{
                max-width: 550px;
                margin: 0 auto;
                margin-top: 50px;
                float: center;            
            } 
            .form-bu{
                
                text-align: center;
                max-width: 280px;
                margin: 0 auto;
                float: right;   
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
                        <img src='imagenes/bb.png' WIDTH=80 HEIGHT=100  VSPACE=3 HSPACE=3" ALIGN="center" class="img-thumbnail">
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="barra">
                    <ul class="nav navbar-nav">
<!--                        <li class="active"><a href="#">Inicio</a></li>-->
                <li><a href="http://localhost:8080/integrador/ayuda.php"id="mostrar" >ayuda</a></li>
                       
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle='dropdown' role="button">
                                Perfil <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role='menu'>
                                <li><a href="#">nombre</a></li>
                                <li><a href="cerrar-session.php">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
       </nav>
                
                <div class="form-bu">
                    <a href="index.php" class="btn btn-primary btn-lg" role="button">Atras</a><br><br>
                </div>
            <?php
          $i = new video();
          $image = $i->nombre("buscar");
          foreach ($image as $row){
         ?>   
         <form class="form-video">
                <video src="<?=$row->ruta ?>" controls autoplay loop>
                <!--<code>video</code>.-->
                </video></form>
          <?php }?>    
          <div class="btn-toolbar" role="toolbar">
    <div class="btn-group btns">
    <button type="button" class="btn btn-default" >BUSCAR</button>    
    <button type="button" class="btn btn-default" >EL</button>
    <button type="button" class="btn btn-default" >ELLA</button>
    <button type="button" class="btn btn-default" >ESTUDIAR</button>    
  </div>
        </div><br>
        </header>       
    </body>
</html>