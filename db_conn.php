<?php
$sname = "star.ct7axrvntx54.ap-northeast-2.rds.amazonaws.com"; // RDS 엔드포인트
$uname = "admin"; // 마스터 사용자 아이디
$password = "rla8353512!"; // 마스터 사용자 비밀번호
$db_name = "star"; // 데이터베이스 이름

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

