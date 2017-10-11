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
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <script>
            //$letra=null;
            $(document).ready(function(){
               $(".btns button").click(function(){
                   //$letra=$(this).html();
                    $("#loader").load("http://localhost:8080/integrador/video/imagenes.php?nombre="+$(this).html());
                    return false;
               }); 
            });
        </script>
        <style>
            .btnmenu{
                text-align: center;
            }
            .footer{
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 30px;
                background-color: #f5f5f5;
            }
            .fila3
            {
                margin: 0 auto;
                padding: 0px;
                /*width: 90%;*/
                float: center;
                /*padding-top: 20px;*/
            
            }
            .fila4
            {
                float: center;
                  /*padding: 10px;*/
                  margin: 5px;
                 margin-left: 380px;
                 /*width: 100%;*/
            }
            .btnatras{
                text-align: right;
                margin: 10px;
                padding: 30px;
                /*width: 100%;*/
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
              <BR>       
           
            <div class="col1">                      
                   <div class="fila3">
                    <?php
                    $i = new video();
                    $image = $i->nombre("BUSCAR");
                    foreach ($image as $row){
                    ?>              
                    <div id="loader" style="height: 320px; width: 400px; margin: 0 auto;">
                        
                        <video src="<?=$row->ruta ?>" controls autoplay loop WIDTH=400 HEIGHT=320>
                <!--<code>video</code>.-->
                        </video>
                    </div>
                        <?php 
                    }
                        ?>
              </div>
            </div><br><br>
            <div class="fila4">
    <div class="btn-toolbar" role="toolbar">
    <div class="btn-group btns">
    <button type="button" class="btn btn-default" >BUSCAR</button>    
    <button type="button" class="btn btn-default" >EL</button>
    <button type="button" class="btn btn-default" >ELLA</button>
    <button type="button" class="btn btn-default" >ESTUDIAR</button>
    <button type="button" class="btn btn-default" >LLEGAR</button>
    <button type="button" class="btn btn-default" >MICROBUS</button>
    <button type="button" class="btn btn-default" >NECESITAR</button>   
  </div>
        </div><br>
            </div>
                <div class="btnmenu">
                    <a href="http://localhost:8080/integrador/index.php" class="btn btn-primary btn-lg"role="button">Atras</a>
                    
                </div> 
            <br><br>
        <div class="footer">
            <div class="f-content">
                Todos los derechos reservados <a href="#">@DAWTEC</a>
            </div>
        </div>
               
                </header>         
    </body>
</html>
