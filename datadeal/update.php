<?php
    $versionCode=2;

    if(isset($_GET['version'])){
        $version=$_GET['version'];
        if($versionCode>$version){
            echo "candown";
        }else {
            echo "noneed";
        }
    }

    if(isset($_GET['operator'])){
        if($_GET['operator']=="down"){

            $file_path="../files/NewsLooker.apk";
            //首先要判断给定的文件存在与否
            if(file_exists($file_path)){
                $fp=fopen($file_path,"r");
                $file_size=filesize($file_path);
                //下载文件需要用到的头
                Header("Content-type: application/octet-stream");
                Header("Accept-Ranges: bytes");
                Header("Accept-Length:".$file_size);
                Header("Content-Length:".$file_size);
                Header("Content-Disposition: attachment; filename=NewsLooker.apk");
                $buffer=1024;
                $file_count=0;
                //向浏览器返回数据
                while(!feof($fp) && $file_count<$file_size){
                    $file_con=fread($fp,$buffer);
                    $file_count+=$buffer;
                    echo $file_con;
                }
                fclose($fp);
            }else{
                echo "error";
            }

        }
    }