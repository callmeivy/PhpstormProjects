<?php
    error_reporting(0);//不显示警告信息
    $dbhost="localhost";
//    $dbhost="192.168.168.105";
    $dbuser="root";
    $dbpass="";
    $dbname="mysql";
//    $dbname="ajaxdemo";
echo "Hello world!\n";
echo "Hello world!＠\n";
//$mysqli=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
//$mysqli=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$mysqli=new mysqli($dbhost,$dbuser,$dbpass,$dbname,'3306','/opt/lampp/var/mysql/mysql.sock');
echo "Hello world!％\n";
//$mysqli->query("SET NAMES 'UTF8' ");
$mysqli->set_charset("UTF8");
//mysql_query("SET NAMES UTF8");
//$mysqli->mysqli_query('set names utf8');
echo "Hello world!！！\n";

// 检查连接
if (!$mysqli)
{
    die("连接错误: " . mysqli_connect_error());
}


//$userage=$_GET['userage'];
//$usersex=$_GET['usersex'];
//$userage='30';
//$usersex='男';
//$userage=$mysqli->real_escape_string($userage);
//$usersex=$mysqli->real_escape_string($usersex);
//echo $userage;
//$query="select * from ajaxtest where usersex='$usersex'";
$query2='select * from user';
//$query2="select * from ajaxtest;";
//echo "Hello world!２\n";
//if(is_numeric($userage))
//{
//    $query .="AND userage <= $userage;";
//}
//echo $query;
//echo '<pre>';
//$qry_result=$mysqli->query($query);
echo $query2;
echo "\n";
//$qry_result2=$mysqli->query($query2) or die($mysqli->error);
//$qry_result2=$mysqli->mysqli_query($query2);
//$qry_result2=mysqli_query($mysqli,$query2);
$qry_result2=$mysqli->query($query2);
//$row = $qry_result2-> fetch_array();
print_r($qry_result2->fetch_row());
//$row = $qry_result2-> mysqli_fetch_all();
echo $qry_result2;
echo $row;
echo "1111\n";
echo $res;
echo "\n";

//if($qry_result->num_rows==0)
if($qry_result2->num_rows==0)
{
    echo json_encode(['data'=>'<h2>未找到符合条件的记录</h2>','sql'=>$query]);
    echo "\n";
    echo '<h2>未找到符合条件的记录</h2>';
    return ;
}

$display_string ="<tr>";
$display_string .="<td>用户名</td>";
$display_string .="<td>年龄</td>";
$display_string .="<td>性别</td>";
$display_string .="</tr>";
echo "Hello world!３";
//insert a new row in the table for each person returned
while($row=mysqli_fetch_object($qry_result)){
    $display_string.="<tr>";
    $display_string.="<td>$row->username</td>";
    $display_string.="<td>$row->userage</td>";
    $display_string.="<td>$row->usersex</td>";
    $display_string.="</tr>";
}
echo $display_string;
echo json_encode(['data'=>$display_string,'sql'=>$query]);//返回json数据格式
//echo json_encode(['data'=>'<tr></tr>','sql'=>$query]);//返回json数据格式
$qry_result2->free();
$mysqli->close();
?>

