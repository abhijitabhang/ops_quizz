<?php 

$host = "65.109.122.227";
$user = "opspvtlt_user_newquizz";
$pass = "NewQuizz@1003";
$db   = "opspvtlt_db_newquizz";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>