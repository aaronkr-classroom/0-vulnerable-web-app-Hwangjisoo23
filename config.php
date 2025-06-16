<?php
// 보안 설정 로드
requier_once __DIR__ . '/config-var.php';

//Connection to database 
 $db = mysqli_connect(DB_HOST, DB_NAME, DB_USER, DB_PASS);

 if (!$db){
    error_log("DB connection failed: " . mysqli_connection_error());

    die("내부 서버 오류입니다. 잠시 후 다시 시도해 보세요.");
 }
?>
