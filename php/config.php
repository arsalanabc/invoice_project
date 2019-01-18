<?php
// $db_host = `127.0.0.1`;
// $db_name = `mysql`;
// $db_user = `root`;
// $db_pass = `root_developer`;


$localhost = "127.0.0.1";
$username = "root";
$password = "root_developer";
$dbname = "mysql";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>