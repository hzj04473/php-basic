<?php
$servername = 'localhost';
$username = 'root';
$password = '';

// DB 연결
try {
    $conn = new PDO("mysql:host=$servername;dbname=abc", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<p>Database연결에 성공했습니다.</p>';
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}

// DB 성성
// $sql = 'CREATE DATABASE firstdb1';

// 테이블 생성
try {
    $sql = 'CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )';

    $conn->exec($sql); // 실행
    echo '<p>Table 생성에 성공했습니다.</p>';
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}

$conn = null;
