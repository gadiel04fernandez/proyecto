

<?php
class Database {
public $db;
public function getConnection(){
$this->db = null;
$hostName = "localhost";
$dbName = "apicruddb";
$userName = "root";
$password = "root";
try{
$this->db = new mysqli($hostName, $userName, $password, $dbName, 3307);
}catch(Exception $e){
echo "Database could not be connected: " . $e->getMessage();
}
return $this->db;
}
}
?>