<?php
require_once("conn.php");
$id = $_GET['art'];   //接收前端上传的数据，此处为文章的id值
//$id = 1;   //接收前端上传的数据，此处为文章的id值
$query="select  tdt_archives.title,tdt_archives.pubdate,tdt_archives.litpic,tdt_addonarticle.body from tdt_archives,
tdt_addonarticle where tdt_archives.id ='$id' and tdt_addonarticle.aid='$id'";
$qry_result=$mysqli->query($query);
if($rows=mysqli_fetch_object($qry_result)){}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1" />
<!--    <title>--><?php //echo $rows['title']?><!--</title>-->
    <title><?php echo $rows->title?></title>
</head>
<body>
<div class="artical-main">
    <div class="content">
<!--        <p class="title">--><?php //echo ($rows['title'])?><!--</p><!-- 如果想控制标题字数则使用下列方法--><?php // echo strlen($rows['title'])>30? substr($rows['title'],0,30).'...':$rows['title'] ;  ?><!---->-->
        <p class="title"><?php echo ($rows->title)?></p>
<!--         如果想控制标题字数则使用下列方法-->
<!--        --><?php // echo strlen($rows['title'])>30? substr($rows['title'],0,30).'...':$rows['title'] ;  ?>
<!--        <p class="time">--><?php //echo ($rows['pubdate'])?><!--</p>-->
        <p class="time"><?php echo ($rows->pubdate)?></p>
        <p class="text"><?php echo ($rows->body)?></p>
    </div>
</div>

<?php
$sql_former = "select * from tdt_archives where id<$id order by id desc limit 1"; //上一篇
$sql_later = "select * from tdt_archives where id>$id order by id limit 1"; //下一篇
$queryset_former = $mysqli->query($sql_former); //执行sql语句
while($result = mysqli_fetch_object($queryset_former)){
if(!empty($result)){
//    echo $result->title;
//    echo $result->id;
    echo "<p class='pagelist'>上一篇: <a href='phpArticle.php?art=$result->id'> ".$result->title." </a></p>";
}
else {
    echo "<p class='pagelist'>上一篇: 没有了</p>";}}
$queryset_later = $mysqli->query($sql_later);
while($result2 = mysqli_fetch_object($queryset_later)){
if(!empty($result2)){
    echo "<p class='pagelist' style='margin-bottom:20px;'>下一篇: <a href='phpArticle.php?art=$result2->id'> ". $result2->title."</a><br></p>";
}
else {
    echo "<p class='pagelist' style='margin-bottom:20px;'>下一篇: 没有了</p>";}}
?>

</body>
</html>