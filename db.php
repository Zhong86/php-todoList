<?php
$server = 'localhost'; 
$user = 'Zhong'; 
$pass = 'ZhongSql'; 
$db = 'todo_list'; 

$conn = new mysqli($server, $user, $pass, $db); 

if ($conn->connect_error) {
  die('Connection failed' . $conn->connect_error); 
}
echo "Connected successfully to db"; 

?>
