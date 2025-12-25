<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'member';

// DB 연결
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo '<p>Database 연결에 성공했습니다.</p>';
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}
