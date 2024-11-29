<?php

#return new PDO("mysql:host=127.0.0.1;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
return new PDO("mysql:host=lamp-mariadblatest;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
#$link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

/*$mysqli = new mysqli("localhost","sampleuser","samplepass","sample");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
*/
?>