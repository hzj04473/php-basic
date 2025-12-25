<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'member';

// DB 연결
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<p>Database 연결에 성공했습니다.</p>';
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}

// INSERT 문
try {
    $sql = 'INSERT INTO myguests (firstname, lastname, email)';
    $sql .= " VALUES ('John', 'Doe', 'john@gmail.com')";
    $conn->exec($sql); // 실행
    echo '<p>INSERT 문을 실행했습니다.</p>';
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}
$conn = null; // 연결 끊기
