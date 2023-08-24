<?php
$sname = "10.10.0.233"; // RDS 엔드포인트
$uname = "root"; // 마스터 사용자 아이디
$password = "dkagh1."; // 마스터 사용자 비밀번호
$db_name = "opendb"; // 데이터베이스 이름

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
