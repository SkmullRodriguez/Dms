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
        <title>evaluacion</title>
        <link href="style.css" rel="stylesheet">
        <script type="text/javascript" src="evaluacion3.js"></script>
       <meta charset="utf-8">
        <style> 
            .btnmenu{
                 text-align: center;
                         }
           #form1{
               
                 text-align: center;
                margin: 10px;
                padding: 50px;
                width: 100%;
                
            }
            
           #form2{
                text-align: center;
                margin: 10px;
                padding: 50px;
                width: 100%;
            }
            
           #form3{
                text-align: center;
                margin: 10px;
                padding: 50px;
                width: 100%;
            }
            #form4{
                text-align: center;
                margin: 10px;
                padding: 50px;
                width: 100%;
            }
            #form5{
                text-align: center;
                margin: 10px;
                padding: 50px;
                width: 100%;
            }
            #form6{
                text-align: center;
                margin: 10px;
                padding: 50px;
                width: 100%;
                margin-bottom: 90px;
            }
            .text{
                /*color: 330066;*/
               font-size:13pt; 
               text-align: justify;
               margin-left: 350px;
               float: center;
            }
                        
            
           .jumbotron{
               margin: 20px;
               margin-top: 30px;
/*                background-color: 0D0D0D;
               color: 7EDEF2;*/
               }  
               .footer div{
                margin: 0 auto;
                margin-top: 40px;
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
            <form id="form1" class="jumbotron"> 
               <IMG SRC="../imagenes/evaluacion/eva.jpg" WIDTH=300 HEIGHT=220 BORDER=2 VSPACE=3 HSPACE=3" ALIGN="left" class="img-thumbnail"> 
                <p class="text">
                    Esta evaluacion esta creado para que usted como usuario.<br><br>
                 
                    <b>Intrucciones: </b><br>
                 Observe bien la imagen y las opciones que tiene 
                 en los botones. Y seleccione la que crea que sea correcta, 
                 si es correcta pasara a la siguiente imagen, si no 
                 vuelva a dar clic en otro boton con otras opciones, 
                 hasta elegir el boton correcto.<br><br>
                 <b>Esta evaluacion no tendra una ponderacion. </b><br>
                 Intentalo, solo asi sabras si tendras exito.<br> <br></p>
                 <button id="btnH" type="button" class="btn btn-success" style="width: 130px; height: 50; text-align: center">Iniciar</button>
            </form>
            <form id="form2">
                <IMG SRC="../imagenes/evaluacion/nivel3/2.png" WIDTH=350 HEIGHT=250 BORDER=2 VSPACE=3 HSPACE=3" ALIGN="center" class="img-thumbnail"><br>
           <br><BR>  
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">1</button>
           <button id="btn1" type="button" class="btn btn-success" style="width: 90px; height: 40;">2</button>
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">3</button>
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">4</button>
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">10</button>
        </form> 
        
        <form id="form3">
            <IMG SRC="../imagenes/evaluacion/nivel3/nada.png" WIDTH=350 HEIGHT=250 BORDER=2 VSPACE=3 HSPACE=3" ALIGN="center" class="img-thumbnail"><br>
           <br><BR> 
           <button id="btn2" type="button" class="btn btn-success" style="width: 90px; height: 40;">Nada</button>
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">Mil</button>
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">1</button>
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">Poco</button>  
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">Mas</button>
        </form> 
        
        <form id="form4">
            <IMG SRC="../imagenes/evaluacion/nivel3/millon.PNG" WIDTH=350 HEIGHT=250 BORDER=2 VSPACE=3 HSPACE=3" ALIGN="center" class="img-thumbnail"><br>
           <br><BR> 
            <button type="button" class="btn btn-success" style="width: 90px; height: 40;">Menos</button>
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">Mucho</button>
           <button id="btn3" type="button" class="btn btn-success" style="width: 90px; height: 40;">Millon</button>
           <button  type="button" class="btn btn-success" style="width: 90px; height: 40;">Mas</button>
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">Poco</button>
        </form>
            
        <form id="form5">
            <IMG SRC="../imagenes/evaluacion/nivel3/mas.png" WIDTH=350 HEIGHT=250 BORDER=2 VSPACE=3 HSPACE=3" ALIGN="center" class="img-thumbnail"><br>
            <br><BR> 
            <button id="btn4" type="button" class="btn btn-success" style="width: 90px; height: 40;">Mas</button>
            <button type="button" class="btn btn-success" style="width: 90px; height: 40;">Poco</button>
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">Mucho</button>
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">Menos</button>
           <button type="button" class="btn btn-success" style="width: 90px; height: 40;">Millon</button>
        </form>
            <form id="form6" class="jumbotron">
                <IMG SRC="../imagenes/evaluacion/feli.jpg" WIDTH=300 HEIGHT=220 BORDER=2 VSPACE=3 HSPACE=3" ALIGN="right" class="img-thumbnail">
                <h1>¡BIEN HECHO!</h1>
                <h2>Felicidades has superado este nivel.</h2>
                <h3>Sigue adelante no te detengas</h3>
           
                 <a href="http://localhost:8080/integrador/nivel4/introduccion.php" type="button" class="btn btn-success" style="width: 130px; height: 50;" role="button">Nivel 4</a> 
                 <a href="http://localhost:8080/integrador/nivel3/iniciar.php" type="button" class="btn btn-success" style="width: 130px; height: 50;" role="button">Repetir Nivel 3</a> 
         <br><br>
            </form>
        </div>
        <br>
         <div class="btnmenu"> 
         <a href="http://localhost:8080/integrador/nivel3/introduccion.php" class="btn btn-primary btn-lg" role="button">Salir</a> 
        <div class="footer">
            <div class="f-content">
         
            Todos los derechos reservados <a href="#">@DAWTEC</a>
            </div>
            </div>
        </div>       
        </div>
    </body>
</html>