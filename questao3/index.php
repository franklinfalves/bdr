<?php
class MyUser
{
   
   class Connect {
   
	   	private $host = 'localhost';
	   	private $db   = 'app';
	   	private $user = 'root';
	   	private $pass = '';
	   
	   	public static $instance;
  
	    private function __construct() {
	        //
	    }
  
	    public static function getInstance() {
	        if (!isset(self::$instance)) {
	            self::$instance = new PDO('mysql:host=$host;dbname=$db', $root, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
	        }
	  
	        return self::$instance;
	    }
  
	}
}



public function getUserList(){

	try {
            $sql = "SELECT name FROM user ORDER BY name ASC";
            $result = Conexao::getInstance()->query($sql);
            $list = $result->fetchAll();
            
            return $list;
        
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação";
        }

}

getUserList();
