<?php
session_start();
$host='localhost'; $db='pacpet_db'; $user='root'; $pass='';
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error) die('Database connection failed: '.$conn->connect_error);
$conn->set_charset('utf8mb4');
function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
function admin_required(){ if(empty($_SESSION['admin_id'])){ header('Location: login.php'); exit; } }
?>
