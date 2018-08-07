<?php
//https://blog.csdn.net/wbx_wlg/article/details/53541090
/********连接数据库公用文件***********/
header("Content-Type:text/html;charset=utf8");//申明编码方式
$dbhost="localhost";
//    $dbhost="192.168.168.105";
$dbuser="root";
$dbpass="";
$dbname="ajaxdemo";
$mysqli=new mysqli($dbhost,$dbuser,$dbpass,$dbname,'3306','/opt/lampp/var/mysql/mysql.sock');
$mysqli->set_charset("UTF8");
if (!get_magic_quotes_gpc()) //php中$_GET与$_POST过滤sql注入
{
    if (!empty($_GET))
    {
        $_GET  = addslashes_deep($_GET);
    }
    if (!empty($_POST))
    {
        $_POST = addslashes_deep($_POST);
    }
    $_COOKIE   = addslashes_deep($_COOKIE);
    $_REQUEST  = addslashes_deep($_REQUEST);
}
function addslashes_deep($value)
{
    if (empty($value))
    {
        return $value;
    }else
    {
        return is_array($value) ? array_map('addslashes_deep', $value) : addslashes($value);
    }
}
?>