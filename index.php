<html>
<head>
</head>
<body>
1111111111111
<?
//require_once ("test.php");
print "fgfgfg";
Error_Reporting (E_ALL & E_STRICT);
Error_Reporting(E_ALL & E_NOTICE);
//require ("ret.php");
$tet = 6;
echo $tEt;
//$t = ini_get('log_errors');
//$t1 = ini_get('error_log');
//ini_set(error_log,'test.txt');
//$mysqli = new mysqli("localhost","root","","test");
//$mysqli -> connect();
//$n = $_POST['name'];
//echo $n;

class a {
    public function get(){
       echo "Привет я класс а1"; 
    }
}

class b {
    private $db;
    public function __construct(){
       $this->db = new a; 
    }
    public function get(){
      //$this->db->get();  
    }
     
  public function Create (){
    return new a;
  }
  
  public function Valid ($var){
    
   return preg_match('/^[0-9]$/',$var);
    
  } 
    
}

//$obj = new a;
//$obj->set("dfdfdfdf");
//$obj->get();
$name = $_POST['name']; 
$obj1 = new b;
if($obj1->Valid($name)){
    echo("Проверка прошла");
}
else{
    echo("Проверка не прошла");
}
$obj1->Create()->get();

/*
class WorkWithDB {
    public function someMethodOfWorkWithDB() {}
}

class WorkWithUsers {
    private $db;
    public function __construct() {
        $this->db = new WorkWithDB;
    }
    public function someMethodOfWorkWithUsers() {
        $this->db->someMethodOfWorkWithDB();
    }
}

*/
?>

<form method="post">
         <input name="name" type="text">
         <input type="submit" value="Send">
</form>

</body>
</html>
