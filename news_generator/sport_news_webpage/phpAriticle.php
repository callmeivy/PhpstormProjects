<?php
require_once("conn.php");
$id = $_GET['art'];   //接收前端上传的数据，此处为文章的id值
//  $query=mysql_query("SELECT * FROM tdt_archives  WHERE id = '$id'") or die("文章错误:".mysql_error()); //查询一个表里的数据
$query=mysql_query("select  tdt_archives.title,tdt_archives.pubdate,tdt_archives.litpic,tdt_addonarticle.body from tdt_archives,tdt_addonarticle where tdt_archives.id ='$id' and tdt_addonarticle.aid='$id'") or die("文章错误:".mysql_error());//因为新闻的正文和标题、发布时间不在一个表里，所有这里使用合并两个表进行条件查询
if($rows=mysql_fetch_array($query)){
    $rows['title'];
    $rows['litpic'];
    $rows['pubdate'] = date("Y-m-d",$rows['pubdate']);
    $rows['body'] ;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1" />
    <title><?php echo $rows['title']?></title>
</head>
<body>
<div class="artical-main">
    <div class="content">
        <p class="title"><?php echo ($rows['title'])?></p><!-- 如果想控制标题字数则使用下列方法<?php  echo strlen($rows['title'])>30? substr($rows['title'],0,30).'...':$rows['title'] ;  ?>-->
        <p class="time"><?php echo ($rows['pubdate'])?></p>
        <p class="text"><?php echo ($rows['body'])?></p>
    </div>
</div>

<?php
$sql_former = "select * from tdt_archives where id<$id order by id desc "; //上一篇
$sql_later = "select * from tdt_archives where id>$id "; //下一篇
$queryset_former = mysql_query($sql_former); //执行sql语句
if(mysql_num_rows($queryset_former))//返回记录数，并判断是否为真，以此为依据显示结果
{
    $result = mysql_fetch_array($queryset_former);
    echo "<p class='pagelist'>上一篇: <a href='phpArticle.php?art=$result[id]'> ". $result['title']." </a></p>";
} else {
    echo "<p class='pagelist'>上一篇: 没有了</p>";}
$queryset_later = mysql_query($sql_later);
if(mysql_num_rows($queryset_later))
{
    $result = mysql_fetch_array($queryset_later);
    echo "<p class='pagelist' style='margin-bottom:20px;'>下一篇: <a href='phpArticle.php?art=$result[id]'> ". $result['title']."</a><br></p>";
} else {
    echo "<p class='pagelist' style='margin-bottom:20px;'>下一篇: 没有了</p>";}
?>

</body>
</html>