<?php
 //database configuration
 $dsn = 'mysql:host=sql1.njit.edu;dbname=sg948';
 $username = 'sg948';
 $password = 'HfwrZHvX';
 
 try {
   $db = new PDO($dsn,$username,$password);
 }
 catch (PDOException $e) {
   $error_message = $e->getMessage();
   echo $error_message;
   exit();
 }
?>