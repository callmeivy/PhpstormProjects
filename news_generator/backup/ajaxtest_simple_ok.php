<?php
$dbhost="localhost";
//    $dbhost="192.168.168.105";
$dbuser="root";
$dbpass="";
$dbname="mysql";
$mysqli=new mysqli($dbhost,$dbuser,$dbpass,$dbname,'3306','/opt/lampp/var/mysql/mysql.sock');
//$mysqli=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
//$mysqli->query("SsET NAMES 'UTF8' ");
$mysqli->set_charset("UTF8");
// 检查连接
if ($mysqli->connect_error)
{
    $response="数据库连接错误";
}
$query2='select * from help_topic limit 2';
echo $query2;
echo "\n";
$qry_result2=$mysqli->query($query2);
var_dump($qry_result2);die;
$row_cnt = $qry_result2->num_rows;
echo $row_cnt;
//$row = $qry_result2-> fetch_array();
print_r($mysqli->fetch_row());
//$row = $qry_result2-> mysqli_fetch_all();

$mysqli->close();
?>

