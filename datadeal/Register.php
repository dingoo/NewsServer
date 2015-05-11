<?php

include "../config/Config.php";

if(isset($_GET['username'])&&isset($_GET['password'])){
    $username=$_GET['username'];
    $password=$_GET['password'];
    $sql="insert into `userinfo` (`username`,`password`) VALUES ('$username','$password')";
    try {
        mysql_query($sql);
        echo "success";
    } catch (Exception $e) {
        echo "failure";
    }
}else{
    echo "failure";
}