<?php
// Include cấu hình
include_once __DIR__ . '/layouts/config.php';
// 
$conn = mysqli_connect('localhost', 'root', '', 'thucphamchay') or die('Xin lỗi, database không kết nối được.');

$conn->query("SET NAMES 'utf8mb4'"); 
$conn->query("SET CHARACTER SET UTF8MB4");  
$conn->query("SET SESSION collation_connection = 'utf8mb4_unicode_ci'"); 
?>