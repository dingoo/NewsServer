<?php
    include "../config/Config.php";

    /*
     * select
     * insert
     * querynum
     */
    if (isset($_GET['operator'])) {

        if($_GET['operator']=="select"){

            if(isset($_GET['newsid'])){
                $newsid=$_GET['newsid'];
                $sql = "select * from `comments` WHERE `newsid`=$newsid";
            }
            if(isset($_GET['usersid'])){
                $userid=$_GET['usersid'];
                $sql = "select * from `comments` WHERE  and `usersid`=$userid";
            }

            $query = mysql_query($sql) or die("查询错误");
            $newsarray = array();
            $count = 0;
            while ($rs = mysql_fetch_array($query)) {

                try {
                    $singlenewarray = array();
                    $singlenewarray["id"] = $rs['id'];
                    $singlenewarray["newsid"] = $rs['newsid'];
                    $singlenewarray["usersid"] = $rs['usersid'];
                    $singlenewarray["content"] = $rs['content'];
                    $singlenewarray["time"] = $rs['time'];
                    $newsarray[$count] = $singlenewarray;
                    $count++;
                } catch (Exception $e) {
                    echo "ErrorMessage:" . $e->getMessage();
                }
            }
            $str = json_encode($newsarray);
            //$str=preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $str);
            echo $str;
        }
        else if($_GET['operator']=="insert"){
            if(isset($_GET['newsid'])&&isset($_GET['usersid'])){
                $newsid=$_GET['newsid'];
                $userid=$_GET['usersid'];
                $content=urldecode($_GET['content']);

                $sql = "insert into `comments`(`newsid`,`usersid`,`content`,`time`) "
                    ."values ($newsid,$userid,'$content','".date('Y-m-d H:i:s',time())."')";
                try{
                    mysql_query($sql);
                    echo "success";
                }catch (Exception $e){
                    echo "failure";
                }
            }
        }
        else if($_GET['operator']=="querynum"){
            if(isset($_GET['newsid'])){
                $newsid=$_GET['newsid'];

                $sql="select count(*) from `comments` where `newsid`=$newsid";
                try{
                    $query=mysql_query($sql) or die(mysql_error());
                    $rs=mysql_fetch_array($query);
                    echo $rs[0];
                }catch (Exception $e){
                    echo 0;
                }
            }
        }
    }