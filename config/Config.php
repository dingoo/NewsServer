<?php
        @$con=mysql_connect("localhost","root","admin")or die("连接失败");
        mysql_select_db("newsserver");
        //mysql_query("SET NAMES GB2312");
        mysql_query("SET NAMES 'UTF8'");