<?php
    include "../config/Config.php";

    $sql="select * from `userinfo`";
    $query=mysql_query($sql)
    $newsarray=array();
    $count=0;
    while($rs=mysql_fetch_array($query)){

        try{
            $singlenewarray=array();
            $singlenewarray["userid"]=$rs['userid'];
            $singlenewarray["username"]=$rs['username'];
            $singlenewarray["password"]=$rs['password'];
            $singlenewarray["usericon"]=$rs['usericon'];
            $singlenewarray["nickname"]=$rs['nickname'];
            $singlenewarray["city"]=$rs['city'];
            $singlenewarray["phonenum"]=$rs['phonenum'];
            $newsarray[$count]=$singlenewarray;
            $count++;
        }catch (Exception $e){
            echo "ErrorMessage:".$e->getMessage();
        }
    }
    $str=json_encode($newsarray);
    //$str=preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $str);
    echo $str;