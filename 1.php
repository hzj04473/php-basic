<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first PHP Page</h1>
    <!-- html 주석 -->
    <?php
        echo "Hello World";

        // 한 줄
        # 주석
        /*
        여러 줄 
        주석
        */ 

        // 변수
        $txt = "안녕하세요"; // 문자열
        $x = 5; // 정수
        $y = 10.6; // 실수

        // 변수는 대소문자를 구분한다.
        echo "x = $x, X = $X";
        echo "<br>";

        // 전역변수
        // 로컬변수 (지역변수)
        function myTest() {
            // global $x;
            $x = 3;
            echo "변수 x 의 출력값 $x";
            echo "<br>";
            $x++;
        }

        myTest();

        echo "변수 x 의 출력값 $x";
    ?>
</body>
</html>
