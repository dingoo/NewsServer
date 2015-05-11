<?php
include "config/Config.php";
echo "hsdjklgldk"."<br>";
$sql="select * from `comments`";
try {
    $query = mysql_query($sql);
    print_r($query);
    $rs = mysql_fetch_array($query);
    print_r($rs);
} catch (Exception $e) {
    echo "error";
}
echo "<br>";
echo "hsdjklgldk"."<br>";
