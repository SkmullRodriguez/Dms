<?php

class usuarios {
    public $user;
    public $pass;
    
    function __construct($user=null, $pass=null) {
        $this->user = $user;
        $this->pass = $pass;
    }
    
    function buscarUsuario(){
        $db= Database::getConnection();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $st=$db->prepare('select nombre, pass from login where nombre=:user and pass=md5(:pass) limit 1');
        $st->execute(array('user'=> $this->user, 'pass'=> $this->pass));

        return $st->fetchAll(PDO::FETCH_CLASS);
    }
    
     function registrarSesion($row){
        $_SESSION['permitido']=TRUE;
        $_SESSION['user']=$row[0]->user;
    }
    
    public static function cerrarSesion(){
        session_destroy();
        $_SESSION= array();
    }
    
    public function registrar(){
        $db = Database::getConnection();
        $st = $db ->prepare("insert into login values (null, :us, md5(:pa), 2)");
        $st->execute(array("us"=>  $this->user,"pa"=> $this->pass));
    }        
}
