<?php
session_start();
include '../class/Database.php';
include '../class/nivel2.php';
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
            function mostrar(id){
             if(id == "formulario1"){
                 $('#formulario1').show();
                 $('#formulario2').hide();
             }
             if (id == "formulario2"){
                 $('#formulario1').hide();
                 $('#formulario2').show();
             }
         };

         $(document).ready(function(){
               $(".btns button").click(function(){
                    $("#loader").load("http://localhost:8080/integrador/nivel2/imagenes.php?nombre="+$(this).html());
                    return false;
               });
               $(".btns button").click(function(){
                    $("#loader1").load("http://localhost:8080/integrador/nivel2/imagenes.php?nombre="+$(this).html());
                    return false;
               });
            });
        </script>
        <!--codigo para imagenes-->
        <style>
            .btnmenu{
                display: inline-block;
                margin: 5;
                padding: 5;
                text-align: right;
                margin-left: 800;
            }
            .footer{
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 30px;
                background-color: #f5f5f5;
            }
            .footer div{
                margin: 0 auto;
                text-align: left;
                line-height: 30px;
            }

         .menus
            {
                float: left;
                margin: 50;
                line-height: 30px;
                padding: 10;
                width: 20%;
                display: inline;
            }

            .form1{
                display: inline-block;
                float: left;
                 margin: 10;
                 margin-left: 150
            }

            .styleForm1{
                display: inline-block;

            }
            .styleForm11{
                display: inline-block;
                float: left;
                 padding: 60;
                 margin: 10;
                 margin-top: 0 auto;
                 margin-bottom: 120;
                 margin-left: 270;
                 margin-right: 50;
            }

            .styleImg1{
                display: inline-block;
                float: right;
                margin: 5;
                margin-top: 60;
                margin-left: 20;

            }

            .styleForm2{
                display: inline-block;
            }
            .styleForm22{
                 display: inline-block;
                float: left;
                 padding: 60;
                 margin: 0 auto;
                 margin-top: 10;
                 margin-bottom: 120;
                 margin-left: 270;
                 margin-right: 50;
                            }
      .styleImg2{
                display: inline-block;
                float: right;
                margin: 5;
                margin-top: 60;
                margin-left: 20;
            }
            .jumbotron{
               background-color: 0D0D0D;
               color: 7EDEF2;
               margin: 5;
               margin-left: 150;
            }
            .selBo{
                display: inline-block;
            }

            #loader{
                margin: 10;
                margin-top: 100;
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
      <div class="selBo">
       <div class="form1">
      <form method="post">
          <select id="status" onchange="mostrar(this.value);" style="width:120px; font-size:20px; ">
                <option value="formulario1">A-H</option>
                <option value="formulario2">H-Z</option>
            </select>
          </form>
      </div>

          <div class="btnmenu">
                    <a href="http://localhost:8080/integrador/index.php" class="btn btn-primary btn-lg" role="button">Inicio</a>
                    <a href="http://localhost:8080/integrador/nivel4/introduccion.php" class="btn btn-primary btn-lg" role="button">Atras</a>
      </div>

      </div>
      <div id="formulario1" class="styleForm1 ">
    <!--<div class="form-group menus">-->
        <div class="btn-toolbar" role="toolbar">
            <div class="styleForm11">
          <div class="btn-group-vertical btns">
           <form action="iniciar.php" method="post">
             <div class="btn-group-vertical btns">
               <!-- <button type="button" class="btn btn-default">aconsejar</button>
                <button type="button" class="btn btn-default">aparte</button> !-->
                <button type="button" class="btn btn-default">chisme</button>
                <button type="button" class="btn btn-default">comunicar</button>
                <button type="button" class="btn btn-default">contar</button>
                <button type="button" class="btn btn-default">correo</button>
                <button type="button" class="btn btn-default">criticar</button>
                <button type="button" class="btn btn-default">decir</button>
                <button type="button" class="btn btn-default">discutir</button>
                <button type="button" class="btn btn-default">entonces</button>
                <!--<button type="button" class="btn btn-default">espere</button> !-->
                <button type="button" class="btn btn-default">explicar</button>
                <button type="button" class="btn btn-default">gritar</button>
                <button type="button" class="btn btn-default">hablar</button>
             </div></form></div></div>
        <?php
          $i = new nivel2();
          $image = $i->nombre("chisme");
          foreach ($image as $row){
        ?>
               <div id="loader" class="styleImg1" style="height: 320px; width: 400px; margin: 0 auto;  margin-left: 100; margin-top: 100; margin-bottom: 70;">
               <IMG SRC="<?=$row->ruta ?>"WIDTH='400' HEIGHT='320' BORDER='2' VSPACE='3' HSPACE='3' class="img-thumbnail">
              </div>
        <?php 
        }   
        ?>
    </div>
      </div> 
      
          <div id="formulario2" style="display:none; "class="styleForm2" >                   
      <div class="btn-toolbar" role="toolbar">
              <div class="styleForm22">
                  <form action="iniciar.php" method="post">
                    <div class="btn-group-vertical btns">
                <button type="button" class="btn btn-default">hasta</button>
                <button type="button" class="btn btn-default">insultar</button>
                <button type="button" class="btn btn-default">justificar</button>
                <button type="button" class="btn btn-default">llamar</button>
                <button type="button" class="btn btn-default">nombre</button>
                <button type="button" class="btn btn-default">otro</button>
                <button type="button" class="btn btn-default">para</button>
                <button type="button" class="btn btn-default">pero</button>
                <button type="button" class="btn btn-default">preguntar</button>
                <button type="button" class="btn btn-default">responder</button>
                <button type="button" class="btn btn-default">secreto</button>
                <button type="button" class="btn btn-default">tambien</button>
                <button type="button" class="btn btn-default">tampoco</button>
                <button type="button" class="btn btn-default">vocabulario</button>

                   </div> </form></div>
        <?php
          $i = new nivel2();
          $image = $i->nombre("enero");
          foreach ($image as $row){
        ?>
                      <div id="loader1" class="styleImg2" style="height: 320px; width: 400px; margin: 0 auto;  margin-left: 100; margin-top: 100; margin-bottom: 70;">
                    <IMG SRC="<?=$row->ruta ?>"WIDTH='400' HEIGHT='320' BORDER='2' VSPACE='3' HSPACE='3' class="img-thumbnail">
                </div>
        <?php 
        }
        ?>
              </div>
              </div>
      <br>
        <div class="footer">
            <div class="f-content">
                Todos los derechos reservados <a href="#">@DAWTEC</a>
            </div>
        </div>
    </body>
    </header>
</html>
