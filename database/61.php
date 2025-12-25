<?php
$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<p>Database연결에 성공했습니다.</p>';
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}

// Create Database
// try {
//     $sql = 'CREATE DATABASE firstdb1';
//     $conn->exec($sql); // 실행
//     echo '<p>Database 생성에 성공했습니다.</p>';
// } catch (PDOException $e) {
//     echo $e->getMessage();
//     exit();
// }

// Drop Database
try {
    $dbname = 'firstdb1';

    $sql = 'DROP DATABASE ' . $dbname;
    $conn->exec($sql); // 실행
    echo '<p>' . $dbname . ' 삭제에 성공했습니다.</p>';
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}

$conn = null;
