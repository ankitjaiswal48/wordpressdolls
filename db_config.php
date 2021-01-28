<?php


define (DB_USER, "root");
define (DB_PASSWORD, "");
define (DB_DATABASE, "test1");
define (DB_HOST, "localhost");


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($mysqli->connect_error) {
   die("Connection failed: " . $mysqli->connect_error);
}
  echo "Connected successfully";
?>
