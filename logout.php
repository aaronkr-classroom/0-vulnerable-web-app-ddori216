<?php

include("config.php");
session_start();

header("X-Frame-Options: DENY"); //클릭재킹방지

//destroy created session and redirect to login page

$_SESSION['login_user']=NULL;
$_SESSION['csrf']=NULL;
session_destory();


header("Location: /index.html");

?>