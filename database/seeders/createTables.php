<?php

include __DIR__."/../database.php";

 $db = Database::getConnection();

 $stmt = $db->prepare("
   CREATE TABLE IF NOT EXISTS tasks (
     id INT AUTO_INCREMENT PRIMARY KEY,
     task TEXT
   );
 ");

 $stmt->execute();
