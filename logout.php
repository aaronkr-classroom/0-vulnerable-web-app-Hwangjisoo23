<?php

include("config.php");
session_start();

header("X-Frame-Option: DENY")

//destroy created session and redirect to login page

$_SESSION['login_user'] = NULL;
$_SESSION['csrf'] = NULL;
session_destory();
header("Location: /index.html");

?>
<script>
if(top != window) {
  top.location = window.location
}

</script>