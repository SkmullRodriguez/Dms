<?php 
session_start();
include '../class/Database.php';
include '../class/nivel1.php';
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
                    $("#loader").load("http://localhost:8080/integrador/nivel1/imagenes.php?letra="+$(this).html());
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
                 margin-left: 150px;
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
                    $i = new nivel1();
                    $image = $i->letra("a");
                    foreach ($image as $row){
                    ?>              
                    <div id="loader" style="height: 320px; width: 400px; margin: 0 auto;">
                        <IMG SRC="<?=$row->ruta ?> "WIDTH=400 HEIGHT=320 BORDER=2 VSPACE=3 HSPACE=3"  class="img-thumbnail">
                    </div>
                        <?php 
                    }
                        ?>
              </div>
            </div><br><br>
            <div class="fila4">
    <div class="btn-toolbar" role="toolbar">
    <div class="btn-group btns">
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">A</button>    
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">B</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">C</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">D</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">E</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">F</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">G</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">H</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">I</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">J</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">K</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">L</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">M</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">N</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">O</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">P</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">Q</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">R</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">S</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">T</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">U</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">V</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">W</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">X</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">Y</button>
    <button type="button" class="btn btn-default" style="width: 40px; height: 35;">Z</button>
    
  </div>
        </div><br>
            </div>
                <div class="btnmenu">
                    <a href="http://localhost:8080/integrador/index.php" class="btn btn-primary btn-lg" role="button">Inicio</a>
                    <a href="http://localhost:8080/integrador/nivel1/introduccion.php" class="btn btn-primary btn-lg" role="button">Atras</a>
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
