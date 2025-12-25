<?php
// pdo 설치 연결 확인
// phpinfo();
// exit();

// MySQLi OOP
$servername = 'localhost';
$username = 'root';
$password = '';

// 객체지향 방식
// try {
//     $conn = new mysqli($servername, $username, $password);
//     echo 'DB 연결에 성공했습니다.';
// } catch (mysqli_sql_exception $e) {
//     echo 'DB 연결에 실패했습니다.';
//     echo $e->getMessage();
//     exit();
// }

// 절차지향 방식
// try {
//     $conn = mysqli_connect($servername, $username, $password);
//     echo 'DB 연결에 성공했습니다.';
// } catch (mysqli_sql_exception $e) {
//     // echo 'DB 연결에 실패했습니다.';
//     // echo $e->getMessage();
//     // exit();
//     die('DB 연결에 실패했습니다.' . $e->getMessage());
// }

// PDO
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    echo 'DB 연결에 성공했습니다.';
} catch (PDOException $e) {
    echo 'DB 연결에 실패했습니다.';
    echo $e->getMessage();
    exit();
}
