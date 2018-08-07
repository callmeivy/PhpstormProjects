<?php
$host="192.168.168.105";
$db_user="root"; //数据库用户
$db_pass=""; //数据库密码为空！
$db_name="btv_v2"; //数据库
$timezone = "Asia/Beijing";

$link=mysqli_connect($host,$db_user,$db_pass,$db_name);//连接
mysqli_query($link,"SET names UTF8");//执行

header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone); //北京时间
?>