<?php 
session_start();

if($_POST){
    $us=$_POST['user'];
    $pa = $_POST['pass'];
    include './class/Database.php';
    include './class/usuarios.php';
    //if($us=" " || $pa=" "){?>
    <!--<div class="alert alert-danger">Ingrese su usuario y contraseña</div>-->
    <?php 
    //}else{
         $user= new usuarios($us, $pa);
         $row= $user->buscarUsuario();
         if($row){
         $user->registrarSesion($row);
         header('location: index.php');
         }else{
        
         }
     }
//}
?>
<html>
    <head>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js">
        
        
        </script>
        
        <meta charset="utf-8">
        <style>
            .form-signin{
            width:350px;
            padding:40px 30px;
            background-color:  	FFFFFF;
/*            :rgba(235,235,205,0.7);*/
            border-radius:4px;
            -moz-border-radius:4px;
            -webkit-border-radius:4px;
            margin:50px auto;
            }  
        
            .checkbox{
                margin: 5px;
                padding-left: 20px;
            }
            .row{
                margin: 140;
            }
            
            *{
                box-sizing:border-box;
                -moz-box-sizing:border-box;
                -webkit-box-sizing:border-box;
                font-family:arial;
            }

            body{   
         background-image: url(imagenes/fondos/gf.jpg);
            }
            h3{
                color: #7e00c7;
                text-align:center;
                font-faimly:icon;
            }           
            .form-group{
                position: relative;
                margin-bottom:15px;
            }
    
.form-control:focus, .form-control:focus + .fa{
  border-color:#10CE88;
  color:#c700ac;
  font-weight: bold;
}
.form-group .fa{
  position: absolute;
  right:15px;
  top:17px;
  color:#999;
}
.log-status.wrong-entry {
  -webkit-animation: wrong-log 0.3s;
  -moz-animation: wrong-log 0.3s;
  -ms-animation: wrong-log 0.3s;
  animation: wrong-log 0.3s;
}
.log-status.wrong-entry .form-control, .wrong-entry .form-control + .fa {
  border-color: #4e00cc;
  color: #4e00cc;
}
.log-btn{
  background:#b533ff;
  dispaly:inline-block;
  width:100%;
  font-size:16px;
  height:50px;
  color:#fff;
  text-decoration:none;
  border:none;
  border-radius:4px;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
}

.btn1{
  background:#b533ff;
  dispaly:inline-block;
  width:100%;
  font-size:16px;
  height:50px;
  color:#fff;
  text-decoration:none;
  border:none;
  border-radius:4px;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
}
img{
    dispaly:inline-block;
    width: 200px;
    height: 120px;
      margin-left: 45px;
}
h4{
    color: #7e00c7;
    text-align:left;
    font-faimly:icon;
}
  </style>
    </head>
    <body>   
        <header class="container-fluid">
            
            <div class="container">
<!--            <?php 
            if($error=1){
            ?>         
            <div class="alert alert-danger">Error en los datos</div>
            <?php } ?>
            --> 
            <form class="form-signin" method="post">               
                                      
                <img src='imagenes/bb1.jpg' WIDTH=80 HEIGHT=100  VSPACE=3 HSPACE=3">
                   
                
                <br>
                <label for="inputUser" class="sr-only">Usuario</label>
                <input type="text" name="user" id="inputUser" class="form-control" placeholder="Usuario"/>
                <label for="inputPassword" class="sr-only">Password</label>
                <br>
                <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Contraseña"/>
                <div class="checkbox">
                    <input type="checkbox" name="recordar"/> <h4>Recordar Contraseña</h4>                </div><br>
                <button type="submit" class="btn btn-lg btn-primary btn-block btn1">INICIAR</button><br>
                <a href="registrar.php" class="btn btn-primary btn-lg log-btn" role="button">REGISTRARSE</a>
            </form>
        </div>
                        
                <div class="panel panel-info">
                    <div class="panel-body">
                        <h4>Es un sistema practico, para personas sin ningun conocimiento basico del lenguaje de señas,
                        haciendo en la visualizacion de imagenes y videos para y mejor aprendizaje...
                        <a href="info.php">acerca de... </h4>
                    </div>
                    </div>
            
        </header>       
    </body>
</html>
