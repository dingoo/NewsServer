
<?php

    include "../config/Config.php";
    header("Content-Type: text/html; charset=utf-8");

    if(isset($_GET['operator'])){
        $operator=$_GET['operator'];
        if($operator=="viewnews"){
            $newsid=$_GET['id'];
            $sql="select * from `newsinfo` where newid=".$newsid;
            $rs=mysql_fetch_array(mysql_query($sql));
?>
            <h2>新闻信息：</h2><br>
                <h3><strong>新闻标题：<?php echo $rs['title'] ?></strong></h3>
                <ul>
                    <li>新闻类别：<?php echo $rs['type'] ?></li>
                    <li>新闻描述：<?php echo $rs['desc'] ?></li>
                    <li>新闻来源：<?php echo $rs['from'] ?></li>
                    <li>新闻发表时间：<?php echo $rs['time'] ?></li>
                    <li>新闻内容URL：<?php echo $rs['content_url'] ?></li>
                    <li>新闻图片URL：<?php echo $rs['pic_url'] ?></li>
                    <li>点击数：<?php echo $rs['hitsnum'] ?></li>
                </ul>
<?php
        }else
		{
?>

<center>
    <h2>新闻信息：</h2><br>
    <form id="addnewsform">
        新闻标题：<input type="text" id="newstitle" name="title"/><br>
        新闻类别：<input type="text" id="type" name="type"/><br>
        新闻描述：<input type="text" id="desc" name="desc" "/><br>
        新闻来源：<input type="text" id="from" name="from"/><br>
        新闻发表时间：<input type="text" id="time" name="time"/><br>
        新闻内容URL：<input type="text" id="content_url" name="content_url"/><br>
        新闻图片URL：<input type="text" id="pic_url" name="pic_url"/><br>
        点击数：<input type="text" id="hitsnum" name="hitsname"/><br>
        <input type="reset" value="重置"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="添加"/>
    </form>
</center>
<?php
        }
	}
?>