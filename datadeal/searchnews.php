<?php

    header("Content-Type: text/html; charset=utf-8");
    if(isset($_GET['keyword'])){
        if(empty($_GET['keyword'])){
            $keyword=$_GET['keyword'];
            $url="http://news.baidu.com/ns?word=title$keyword&tn=newsfcu&from=news&cl=2&rn=30&ct=0";
            $content = file_get_contents($url);
            echo "<html><head><title></title></head><body>$content</body></html>";
        }else{
            if(empty($_GET['url'])){
                $url=$_GET['url'];
                echo file_get_contents($url);
            }
        }
    }else{
        echo "未设置关键词";
    }