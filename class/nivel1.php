<?php
class nivel1 {
     public $aloja;
                    
     function __construct( $alo=null) {
     $this->aloja= $alo;
     }
                    
     function letra($letra){
     $db= Database::getConnection();
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $st=$db->prepare("select ruta from alojamiento where nombre=?");
     $st->bindParam(1, $letra);
     $st->execute();
     return $st->fetchAll(PDO::FETCH_CLASS);
     
     }
     
}             
//     $i = new nivel1();
//     $image = $i->letra();
//     foreach ($image as $row){

//                    function image(){           
//                    $db= Database::getConnection();
//                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                    $st=$db->prepare("select ruta from alojamiento where id_alojamiento=2");
//                    $st->execute();
//                    return $st->fetchAll(PDO::FETCH_CLASS);
//                    }    
//                }

