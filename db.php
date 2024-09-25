<?php
$host = 'localhost';
$dbname = 'hiderm_sale_mg';
$username = 'root';  // یا نام کاربری MySQL
$password = '';  // رمز عبور MySQL

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("اتصال به دیتابیس ناموفق بود: " . $conn->connect_error);
}
?>
<!-- test git  -->
