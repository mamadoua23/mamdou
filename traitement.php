<?php 
define('HOST','localhost');
define('DB_NAME','uvs_etudiant');
define('USER','root');
define('PASSWORD','');

try{
  $db = new PDO("mysql:host=" .HOST. ";dbname=". DB_NAME, USER, PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo " The database is connect!!!";
  

}catch(PDOException $z){
  echo $z;
}

// $conn = mysqli_connect("localhost","micdb","root","" ) or die ("error" . mysqli_error($conn);



?>