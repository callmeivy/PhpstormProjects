<?php
error_reporting(0);  //禁用报错信息
require_once("conn.php");//导入公共连接数据库文件
$query="select * from tdt_archives";
$qry_result=$mysqli->query($query);//这里设置以倒序的方法读取十组数据
$jsonArray=array();//新建数据用于接收数据库每行对应的数据组
while($rows=mysqli_fetch_object($qry_result))
{
    array_push($jsonArray,$rows);     //把数据库的内容添加到新建数组中

}
echo json_encode($jsonArray); //转换成json传递给前端
$mysqli->close();
?>