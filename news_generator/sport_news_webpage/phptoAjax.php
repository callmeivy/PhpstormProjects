<?php
require_once("conn.php");//导入公共连接数据库文件
//$id = $_POST['id'];//获取前端所提供的栏目ID值
//$query=mysql_query("SELECT * FROM tdt_archives where typeid = {$id} order by pubdate desc limit 0,10") or die("错误提示：".mysql_error());//这里设置以倒序的方法读取十组数据
$qry_result=$mysqli->query("SELECT * FROM ajaxtest LIMIT 2");//这里设置以倒序的方法读取十组数据
//$qry_result=$mysqli->query($query);
$jsonArray=array();//新建数据用于接收数据库每行对应的数据组
//var_dump($qry_result);
while($rows=mysqli_fetch_object($qry_result))
{
//    var_dump($rows);
//    $rows['username'];
//    $username=$rows->username;
    $rows->username;
    $rows->userpass;
//    $rows->'userpass';

//    $rows['title'];
//    $rows['pubdate'] = date("Y-m-d",$rows['pubdate']); //转换日期格式
//      $rows['description']=mb_substr(strip_tags(htmlspecialchars_decode($rows['description'])),0,100,"utf-8");
    array_push($jsonArray,$rows);     //把数据库的内容添加到新建数组中
}
echo json_encode($jsonArray); //转换成json传递给前端
?>