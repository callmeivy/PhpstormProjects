<?php
//header('Content-Type: application/json;charset=utf8');
//header('Content-type: application/json');
error_reporting(0);  //禁用保错信息
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
//$userage=$_GET['userage'];
$userage='30';
//$usersex=$_GET['usersex'];
$usersex='男';

$userage=$mysqli->real_escape_string($userage);
$usersex=$mysqli->real_escape_string($usersex);

//$query="select * from ajaxtest where usersex='$usersex'";
$query="select * from user";
//$query="select * from ajaxtest";
//if(is_numeric($userage))
//{
//    $query .="AND userage <= $userage;";
//}
$qry_result=$mysqli->query($query);
//var_dump($query);
if($qry_result->num_rows==0)
{
    echo json_encode(['data'=>'<h2>未找到符合条件的记录</h2>','sql'=>$query]);
    return ;
}

//$display_string ="<tr>";
//$display_string .="<td>用户名</td>";
//$display_string .="<td>年龄</td>";
//$display_string .="<td>性别</td>";
//$display_string .="</tr>";

//insert a new row in the table for each person returned
while($row=mysqli_fetch_object($qry_result)){
    $display_string.="<tr>";
    $display_string.="<td>$row->Host</td>";
    $display_string.="<td>$row->user</td>";
//    $display_string.="<td>$row->username</td>";
//    $display_string.="<td>$row->userage</td>";
//    $display_string.="<td>$row->usersex</td>";
    $display_string.="</tr>";
}
echo json_encode(array('data'=>$display_string,'sql'=>$query));//返回json数据格式
$mysqli->close();
?>

