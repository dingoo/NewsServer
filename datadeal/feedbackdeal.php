<?php
include "../config/Config.php";

if(isset($_GET['userid'])&&isset($_GET['content'])&&isset($_GET['type'])){
    $user=$_GET['userid'];
    $content=urldecode($_GET['content']);
    $type=urldecode($_GET['type']);

    $sql="insert into `feedback` (`type`,`user`,`content`,`time`,`issolved`)"
        ." values ('$type',$user,'$content','".date('Y-m-d H:i:s',time())."',0)";
    try{
        mysql_query($sql) or die("failure");
        echo "success";
    }catch (Exception $e){
        echo "failure";
    }
}