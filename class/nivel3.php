<?php
class nivel3 {
     public $aloja;
                    
     function __construct( $alo=null) {
     $this->aloja= $alo;
     }
                    
     function nombre($nombre){
     $db= Database::getConnection();
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $st=$db->prepare("select ruta from alojamiento where nombre=?");
     $st->bindParam(1, $nombre);
     $st->execute();
     return $st->fetchAll(PDO::FETCH_CLASS);
     
     }
}
