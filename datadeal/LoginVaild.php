<?php

include "../config/Config.php";

if(isset($_GET['username'])&&isset($_GET['password'])){
    $username=$_GET['username'];
    $password=$_GET['password'];
    $sql="select * from `userinfo` where `username`='$username' and `password`='$password'";
    try {
        $query=mysql_query($sql);
        $rs=mysql_fetch_array($query);
//        print_r($rs);
        if(count($rs)==0){
            echo "failure";
        }else{
            echo "success|".$rs[0];
        }

    } catch (Exception $e) {
        echo "failure";
    }
}else{
    echo "failure";
}