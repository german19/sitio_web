<?php
class Conexion extends mysqli{
    private $datos = array('$database_host'=>'',
                      '$database_name'=>'',
                      '$database_user'=>'',
                      '$database_paswd'=>'',
                      '$database_port'=>''
                     );
          
   public function __construct(){
      $this->$datos = array (
                  '$database_host'=>'127.0.0.1',
                  '$database_name'=>'udo',
                  '$database_user'=>'root',
                  '$database_paswd'=>'toor',
                  '$database_port'=>'3306'
                 );
                $this->conectar();
   }
   
    public function __construct1($host, $name, $user, $passwd, $port) {
      $this->$datos = array(
                  '$database_host'=>$host,
                  '$database_name'=>$name,
                  '$database_user'=>$user,
                  '$database_paswd'=>$passwd,
                  '$database_port'=>$port
      );
               $this->conectar();
   }

   public function conectar(){
$this->connect( $this->database_host, 
                $this->database_user,
                $this->database_passwd,
                $this->database_name,
                $this->database_port);
   }

    public function __get($keyname){
        if(array_key_exists($keyname, $this->$datos))
        return $this->datos[$keyname];
    }

    public function __set($keyname,$value){
        if(array_key_exists($keyname, $this->$datos))
         $this->datos[$keyname] = $value;
    }    
}

$objeto = new Conexion();
$rst = $objeto->query('select * from usuario');
$r= $rst->fetch_assoc();
var_dump($r);