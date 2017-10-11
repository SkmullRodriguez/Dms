
    <head>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
       
           <style>
     header.container-fluid{
                  background-color: #999999;
            }
            html{
                position: relative;
                min-height: 100%;
            }
            body{
                margin-bottom: 60px;
            }
            .btnmenu{
                margin: 50; 
                padding: 50;
                text-align: center;
            }
            .footer{
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 30px;
                background-color: #f5f5f5;
            }
            .text{
                margin: 0 auto;
                margin-left: 100;
                margin-right: 100;
                text-align: justify;
                color: black;
                
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
                    <a href="index.php">
                        <img src='imagenes/bb.png' WIDTH=80 HEIGHT=100  VSPACE=3 HSPACE=3" ALIGN="center" class="img-thumbnail">
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="barra">
                    <ul class="nav navbar-nav">
<!--                        <li class="active"><a href="#">Inicio</a></li>-->
                <li><a href="../integrador/ayuda.php"id="mostrar" >ayuda</a></li>
                       
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
              <div class="text">
                  <h1><p style="text-align: center; color: blue;"><b>Ayuda</b></p></h1>
                  <br>
              <P>Este aplicacion web es de facil uso, para todos los usuario todo es sencillo como dar clic, 
                  en las defetentes opciones.</P>
              
              <h2><b>Nivel uno.</b></h2>
         
              <p>Este nivel contiene las 26 letras de abecedario latino, y es de facil uso solo se le debe de
              dar clic en los botones que contiene las diferentes letras, de alli se visualizara cada una de
              ellas, por medio de imagenes.</p>
              
              <h2><b>Nivel dos.</b></h2>
              <p>Este nivel contiene doble informacion que tu debes de elegir en el una lista de meses y dias, 
                  la informacion necesaria sobre los dias de la semana y los meses de año por medio de imagenes, 
                  al dar clic en cada unos de los botones con los nombre de cada uno de ellos</p>
              
              <h2><b>Nivel tres.</b></h2>
         
              <p>Este nivel contiene doble informacion que debes de elegir en una lista: numeros y cantidad.
                  frases que hacen referencias a cantidades y muestras numeros basicos, 
                  al clic en los botones con</p>
             

              <h2><b>Nivel cuatro.</b></h2>
              <p>Este nivel tiene preguntas frecuentes de interrogacion, que dando clic sobre ellas  apareceran 
                  visualizadas por imagenes.
                  
              </p>
              
              <h2><b>Evaluaciones</b></h2>
               <p>La evaluaciones de esta aplicaciones son sencillas aparecen visualizadas diferentes imagenes
                   con diferente significadas que estan colocados en botones que tu debes de seleccionar y si 
                   es asi pasara, a ls siguiente y asi consecutivamente hasta que llegues hasta la ultima.</p>
               <h3> No tienen ponderacion las evaluaciones.</h3>
               
               <h2><b>Videos relacionados</b></h2>
               <p>Contiene videos con frases adicionales que tu puedes poner en practica.</p>
              </div>
         </header>
    </body>
</head>
</html>