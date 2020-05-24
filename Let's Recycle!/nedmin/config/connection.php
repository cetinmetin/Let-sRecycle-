<?php

try {
     $db = new PDO("mysql:host=localhost;dbname=recycle", "root", "");
     $db->query("SET CHARACTER SET utf8");
     ob_start();
     session_start();
} catch ( PDOException $e ){
     print $e->getMessage();
}


?>
