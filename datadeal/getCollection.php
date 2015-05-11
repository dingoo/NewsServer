<?php

include "../config/Config.php";

if (isset($_GET['operator'])) {
    if ($_GET['operator'] == "collect") {
        $newsid = $_GET['newsid'];
        $userid = $_GET['usersid'];

        $sqlcount = "select count(*) from `collection` WHERE `nid`=$newsid and `uid`=$userid";
        $sql="select * from `collection` WHERE `nid`=$newsid and `uid`=$userid";
        try {
            $query = mysql_query($sqlcount);
            $rs = mysql_fetch_array($query);
            if($rs[0]==0){
                $insertsql="insert into `collection` (`nid`,`uid`,`is_collect`) VALUES ($newsid,$userid,1)";
                mysql_query($insertsql);
                echo "success";
            }else{
                $query = mysql_query($sql);
                $rs = mysql_fetch_array($query);
                $updatesql = "";
                if ($rs['is_collect'] == 0) {
                    $updatesql = "update `collection` set `is_collect`=1 WHERE `nid`=$newsid and `uid`=$userid";
                } else if ($rs['is_collect'] == 1){
                    $updatesql = "update `collection` set `is_collect`=0 WHERE `nid`=$newsid and `uid`=$userid";
                }
//                echo $updatesql;
                mysql_query($updatesql);
                echo "success";
            }

        } catch (Exception $e) {
            echo "failure";
        }
    }
    else if($_GET['operator']=="query"){
        $newsid = $_GET['newsid'];
        $userid = $_GET['usersid'];

        $sqlcount = "select count(*) from `collection` WHERE `nid`=$newsid and `uid`=$userid";
        $sql = "select * from `collection` WHERE `nid`=$newsid and `uid`=$userid";
        try {
            $query = mysql_query($sqlcount);
            $rs = mysql_fetch_array($query);
            if($rs[0]==0){
                echo "false";
            }else{
                $query = mysql_query($sql);
                $rs = mysql_fetch_array($query);
                if($rs['is_collect']==0){
                    echo "false";
                }else{
                    echo "true";
                }
            }
        } catch (Exception $e) {
            echo "false";
        }
    }
    else if($_GET['operator']=="getcolnews"){
        $userid = $_GET['userid'];

        $subsql="select `nid` from `collection` where `uid`=$userid";
        $sql="select * from `newsinfo` where `newid` IN ( $subsql )";

        $query = mysql_query($sql) or die(mysql_error());
        $rs = mysql_fetch_array($query);

        $newsarray=array();
        $num=0;
        while($rs=mysql_fetch_array($query)){

            try {
                $singlenewarray = array();
                $singlenewarray["newid"] = $rs['newid'];
                $singlenewarray["title"] = $rs['title'];
                $singlenewarray["type"] = $rs['type'];
                $singlenewarray["desc"] = $rs['desc'];
                $singlenewarray["time"] = $rs['time'];
                $singlenewarray["content_url"] = $rs['content_url'];
                $singlenewarray["pic_url"] = $rs['pic_url'];
                $singlenewarray["from"] = $rs['from'];
                $singlenewarray["hitsnum"] = $rs['hitsnum'];
                $newsarray[$num] = $singlenewarray;
                $num++;
            }catch (Exception $e){
                echo "ErrorMessage:".$e->getMessage();
            }
        }
        $str=json_encode($newsarray);
        //$str=preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $str);
        echo $str;
    }
}