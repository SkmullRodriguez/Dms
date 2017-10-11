<head>
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet"/>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<style>

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
background-color: ‪#‎f5f5f5‬;
}
.text{
margin: 0 auto;
margin-left: 100;
margin-right: 100;
text-align: justify;
color: black;
}.footer div{
                margin: 0 auto;
                margin-top: 40px;
                text-align: left;
                line-height: 30px;
                width: 100%;
                background-color: floralwhite; 
            }
            body{
              	background-image: url(imagenes/fondos/gf.jpg);
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
                       <img src='imagenes/bb1.jpg' WIDTH=80 HEIGHT=50  VSPACE=3 HSPACE=3>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="barra">
                    <ul class="nav navbar-nav">
<!--                        <li class="active"><a href="#">Inicio</a></li>-->
                <li><a href=""id="mostrar" >Ayuda</a></li>
                       
                    </ul>
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle='dropdown' role="button">
Perfil <span class="caret"></span>
<!-- glyphicon glyphicon-remove-->
</a>
<ul class="dropdown-menu" role='menu'>
<li><a href="#">nombre</a></li>
<li><a href="cerrar-session.php">Salir</a></li>
</ul>
<!-- cierre de php -->
</li>
</ul>
</div>
</nav>
<iframe src="http://localhost:8080/integrador/manual.pdf" style="width:900px; height:775px; margin: 0 auto; margin-left: 250px; margin-bottom: 100px;" frameborder="7"></iframe>
        <div class="footer">
            <div class="f-content">
            
            Todos los derechos reservados <a href="#">@DAWTEC</a>
            </div>
            </div>

        
        </header>
</body>
</head>
</html>
