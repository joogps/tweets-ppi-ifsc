<?php
function conectar(){
    $host = "mysql";
    $db_name = "crud_ppi";
    $username = "root";
    $password = "rootpass";
    $conn = null;
   try {
       $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, 
       $username, $password);
       $conn->exec("set names utf8");
   
   } catch(PDOException $exception) {
       echo "Erro de conexão: " . $exception->getMessage();
   }
   return $conn;
}
?>
