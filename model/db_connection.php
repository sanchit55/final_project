<?php

//constants
define('DATABASE','sg948');
define('USERNAME','sg948');
define('PASSWORD','HfwrZHvX');
define('SERVER','sql1.njit.edu');


try {
    $db = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE, USERNAME, PASSWORD);
    //set PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Successfully connected to the database";
    }
    //output error message if connection failed
catch(PDOException $e) {
    echo "Unable to connect to the database:" . '<br>' . $e->getMessage();
    }
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
