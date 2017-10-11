<?php
include '../class/Database.php';
include '../class/nivel2.php';
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
     </head>
    <header class="container-fluid">
    <body>
       <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle='collapse' data-target='#barra'>
                        <span class="sr-only">Menu para movil</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src='../imagenes/bb1.jpg' WIDTH=80 HEIGHT=100  VSPACE=3 HSPACE=3" ALIGN="center" class="img-thumbnail">
                </div>
                <div class="navbar-collapse collapse" id="barra">
                    <ul class="nav navbar-nav">
                      <li><a href="#">Ayuda</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle='dropdown' role="button">
                                Perfil <span class="caret"></span>
<!--                                glyphicon glyphicon-remove-->
                            </a>
<!--                            <button type="button" class="close" aria-hidden="true">&times;</button>-->
                            <ul class="dropdown-menu" role='menu'>
                                <li><a href="#">Nombre</a></li>
                                <li><a href="../cerrar-session.php">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="form-group menus">
            <div class="col1">
              <div class="btn-toolbar" role="toolbar">
                <div class="btn-group-vertical btns">
<!--    <button type="button" class="btn btn-default">dias</button>
    <button type="button" class="btn btn-default">mes</button>-->
    
    <form method="post">
        <select id="status" onchange="mostrar(this.value);">
            <option value="formulario1">dias</option>
            <option value="formulario2">mes</option>
        </select>
    </form>
    
    <div id="formulario1">
       <form action="prueba.php" method="post">
       <div class="btn-group-vertical btns">
        <button type="button" class="btn btn-default">enero</button>
        <button type="button" class="btn btn-default">febrero</button>
        </div>
        <?php
          $i = new nivel2();
          $image = $i->nombre("enero");
          foreach ($image as $row){
        ?>
        <div id="loader" style="height: 440px; width: 500px; margin: 0 auto;">
        <IMG SRC="<?=$row->ruta ?>" WIDTH=500 HEIGHT=440 BORDER=2 VSPACE=3 HSPACE=3" ALIGN="center" class="img-thumbnail">
        </div>
        <?php 
        }
        ?>
    </form>
    </div>
    
    <div id="formulario2" style="display:none;">
        <form action="prueba.php" method="post">
        <div class="btn-group-vertical btns">
        <button type="button" class="btn btn-default">lunes</button>
        <button type="button" class="btn btn-default">miercoles</button>
        </div>
        <?php
          $i = new nivel2();
          $image = $i->nombre("lunes");
          foreach ($image as $row){
        ?>
        <div id="loader1" style="height: 440px; width: 500px; margin: 0 auto;">
        <IMG SRC="<?=$row->ruta ?>" WIDTH=500 HEIGHT=440 BORDER=2 VSPACE=3 HSPACE=3" ALIGN="center" class="img-thumbnail">
        </div>
        <?php 
        }
        ?>
    </form>
    </div>

                </div>
              </div>
           </div>
            
            <div class="btnmenu">
                    <a href="http://localhost:8080/integrador/index.php" class="btn btn-primary btn-lg" role="button">Inicio</a>
                    <a href="http://localhost:8080/integrador/nivel2/introduccion.php" class="btn btn-primary btn-lg" role="button">Atras</a>
            </div>    
        <div class="footer">
        </div>
    </body>
    </header>
</html>
