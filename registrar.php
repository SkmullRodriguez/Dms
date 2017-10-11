<html>
    <head>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js">
        
        </script>
        
        <meta charset="utf-8">
        <style>
            *{
                box-sizing:border-box;
                -moz-box-sizing:border-box;
                -webkit-box-sizing:border-box;
                font-family:arial;
            }   
            .form-regis{
                width:350px;
            padding:40px 30px;
            background-color:  	FFFFFF;
/*            :rgba(235,235,205,0.7);*/
            border-radius:4px;
            -moz-border-radius:4px;
            -webkit-border-radius:4px;
            margin:50px auto;           
            } 
             .form-bt{
               max-width: 389px;
                margin: 0 auto;
               float: right; 
               margin-top: 50px;
            }
             .footer div{
                margin: 0 auto;
                text-align: left;
                line-height: 30px;
            }
            
            .footer{
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 30px;
                background-color: #f5f5f5;
            }
            
            img{
                dispaly:inline-block;
                width: 200px;
                height: 120px;
                margin-left: 45px;
}
 body{   
              background-image: url(imagenes/fondos/gf.jpg);
 
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
        </style>
    </head>
    <body>   
        <header class="container-fluid">
      <div class="form-regis">
            <form method="post">
                 <?php
                 include './class/Database.php';
                 include './class/usuarios.php';
              
                if($_POST){
                 $user=$_POST['userRE'];
                 $pass=$_POST['passRe'];
                 $con=$_POST['passReCon'];
               // if($user=" " || $pass=" "|| $con=" "){
                    
                  //}else{                    
                       if($pass==$con){
                       $user= new usuarios($user, $pass);
                       $row= $user->registrar();
                       echo 'se ha registrado correctamente';
                       header('location: login.php');
                       }else{
                            echo 'Las contraseñas no son iguales';
                            }
                        }
                //}
            ?>
                                       
                 <img src='imagenes/bb1.jpg' WIDTH=80 HEIGHT=100  VSPACE=3 HSPACE=3"> 
                <label for="inputUser" class="sr-only">Usuario</label>
                <input type="text" name="userRE" id="inputUser" class="form-control" placeholder="Introduzca su usuario"/>
                <br>
                <label for="inputUser" class="sr-only">Contraseña</label>
                <input type="password" name="passRe" id="inputUser" class="form-control" placeholder="Introduzca su contraseña"/>                
                <br>
                <label for="inputUser" class="sr-only">Confirmar Contraseña</label>
                <input type="password" name="passReCon" id="inputUser" class="form-control" placeholder="Confirme su contraseña"/>                
                <br>
                <button type="submit" class="btn btn-lg btn-primary log-btn">REGISTRAR</button> <br><br>
                <a href="http://localhost:8080/integrador/login.php" class="btn btn-primary btn-lg log-btn" role="button">Salir</a>
            </form>
      </div> 
<!--            <form  class="form-bt">  
                <a href="http://localhost:8080/integrador/login.php" class="btn btn-primary btn-lg" role="button">  Salir </a>
          </form>-->
            </header>       
    </body>
</html>
