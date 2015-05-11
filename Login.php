
    <?php
        include "Config.php";
        header("Content-Type: text/html; charset=utf-8");

        if(!empty($_POST["username"])&&!empty($_POST["password"])){
            $username=$_POST["username"];
            $password=$_POST["password"];

            $sql="select count(*) from `userinfo` where username='$username' and password='$password'";
            echo $sql;
            $query=mysql_query($sql) or die("查询错误!");
            $rs=mysql_fetch_array($query);

            echo print_r($rs,true);
            if($rs[0]==0){
                echo "<script>alert('登陆失败！aaa');history.back();</script>";
            }else{
//                echo "登陆成功！";
                header("Location: getNewsInfo.php");
            }
        }else{
            echo "<script>alert('登陆失败！bbb');history.back();</script>";
        }
    ?>
