<?php
    include "../config/Config.php";

    if(isset($_GET['count'])){

        $count=$_GET['count'];
        $rand=rand(1,10)+$count;

        if(isset($_GET['dir'])){
            $dir=$_GET['dir'];

            if($dir=="up"){
                $sql="select * from `newsinfo` ORDER BY 'userid' desc LIMIT $count,$rand";
            }else if($dir=="down"){
                $sql="select * from `newsinfo` ORDER BY 'userid' ASC LIMIT $count,$rand";
            }
        }

        $query=mysql_query($sql)or die("查询错误");
        $newsarray=array();
        $num=0;
        while($rs=mysql_fetch_array($query)){

            try{
                $singlenewarray=array();
                $singlenewarray["newid"]=$rs['newid'];
                $singlenewarray["title"]=$rs['title'];
                $singlenewarray["type"]=$rs['type'];
                $singlenewarray["desc"]=$rs['desc'];
                $singlenewarray["time"]=$rs['time'];
                $singlenewarray["content_url"]=$rs['content_url'];
                $singlenewarray["pic_url"]=$rs['pic_url'];
                $singlenewarray["from"]=$rs['from'];
                $singlenewarray["hitsnum"]=$rs['hitsnum'];
                $newsarray[$num]=$singlenewarray;
                $num++;
            }catch (Exception $e){
                echo "ErrorMessage:".$e->getMessage();
            }
        }
        $str=json_encode($newsarray);
        //$str=preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $str);
        echo $str;
    }