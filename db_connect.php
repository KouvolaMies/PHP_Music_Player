<?php
  $servername = "localhost";
  $username = "school";
  $password = "School_3463";
  $dbname = "spotifyclone";
  $charset = 'utf8mb4';
  $dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";
  $pdo = new PDO($dsn, $username, $password);
?>