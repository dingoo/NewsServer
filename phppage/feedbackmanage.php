<style type="text/css">
    <!--
    body {
        margin-left: 3px;
        margin-top: 0px;
        margin-right: 3px;
        margin-bottom: 0px;
    }

    .STYLE1 {
        color: #e1e2e3;
        font-size: 12px;
    }

    .STYLE6 {
        color: #000000;
        font-size: 12;
    }

    .STYLE10 {
        color: #000000;
        font-size: 12px;
    }

    .STYLE19 {
        color: #344b50;
        font-size: 12px;
    }

    .STYLE21 {
        font-size: 12px;
        color: #3b6375;
    }

    .STYLE22 {
        font-size: 12px;
        color: #295568;
    }

    -->
</style>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="30">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="24" bgcolor="#353c44">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td width="6%" height="19" valign="bottom">
                                                <div align="center"><img src="../images/tb.gif" width="14" height="14"/>
                                                </div>
                                            </td>
                                            <td width="94%" valign="bottom"><span class="STYLE1"> 用户反馈基本信息列表</span></td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <div align="right"><span class="STYLE1">
              <input type="checkbox" name="checkbox11" id="checkbox11"/>
              全选      &nbsp;&nbsp;<img src="../images/add.gif" width="10" height="10"/> 添加   &nbsp; <img
                                                src="../images/del.gif" width="10" height="10"/> 删除    &nbsp;&nbsp;<img
                                                src="../images/edit.gif" width="10" height="10"/> 编辑   &nbsp;</span><span
                                            class="STYLE1"> &nbsp;</span></div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
                <tr>
                    <td width="4%" height="20" bgcolor="d3eaef" class="STYLE10">
                        <div align="center">
                            <input type="checkbox" name="checkbox" id="checkbox"/>
                        </div>
                    </td>
                    <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6">
                        <div align="center"><span class="STYLE10">反馈用户</span></div>
                    </td>
                    <td width="5%" height="20" bgcolor="d3eaef" class="STYLE6">
                        <div align="center"><span class="STYLE10">反馈类型</span></div>
                    </td>
                    <td width="20%" height="20" bgcolor="d3eaef" class="STYLE6">
                        <div align="center"><span class="STYLE10">时间</span></div>
                    </td>
                    <td width="30%" height="20" bgcolor="d3eaef" class="STYLE6">
                        <div align="center"><span class="STYLE10">内容</span></div>
                    </td>
                    <td width="15%" height="20" bgcolor="d3eaef" class="STYLE6">
                        <div align="center"><span class="STYLE10">是否解决</span></div>
                    </td>
                    <td width="20%" height="20" bgcolor="d3eaef" class="STYLE6">
                        <div align="center"><span class="STYLE10">基本操作</span></div>
                    </td>
                </tr>
                <tr>
                    <?php
                    include "../config/Config.php";
                    header("Content-Type: text/html; charset=utf-8");

                    $sql="select u.username,f.type,f.content,f.time,f.issolved ".
                        "from userinfo u,feedback f ".
                        "where u.userid=f.user";
                    $query=mysql_query($sql)or die("<font color='red'>查询错误</font>");
                    while($rs=mysql_fetch_array($query)){

                    ?>
                    <td height="20" bgcolor="#FFFFFF">
                        <div align="center">
                            <input type="checkbox" name="checkbox2" id="checkbox2"/>
                        </div>
                    </td>
                    <td height="20" bgcolor="#FFFFFF" class="STYLE19">
                        <div align="center"><?php echo $rs['username'];?></div>
                    </td>
                    <td height="20" bgcolor="#FFFFFF" class="STYLE6">
                        <div align="center"><?php echo $rs['type'];?></div>
                    </td>
                    <td height="20" bgcolor="#FFFFFF" class="STYLE19">
                        <div align="center"><?php echo $rs['time'];?></div>
                    </td>
                    <td height="20" bgcolor="#FFFFFF" class="STYLE19">
                        <div align="center"><?php echo $rs['content'];?></div>
                    </td>
                    <td height="20" bgcolor="#FFFFFF" class="STYLE19">
                        <div align="center">
                            <?php
                                if($rs['issolved']==0){
                                    echo "未解决";
                                }
                                else{
                                    echo "已解决";
                                }
                            ?>
                        </div>
                    </td>
                    <td height="20" bgcolor="#FFFFFF">
                        <div align="center" class="STYLE21">删除 | 查看 |
                            <?php
                            if($rs['issolved']==0){
                                echo "设置已解决";
                            }
                            else{
                                echo "设置未解决解决";
                            }
                            ?>
                        </div>
                    </td>
                </tr>

                <?php }?>

            </table>
        </td>
    </tr>
    <tr>
        <td height="30">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="33%">
                        <?php
                        $sql="select count(*) ".
                            "from userinfo u,feedback f ".
                            "where u.userid=f.user";
                        $query=mysql_query($sql);
                        $rs=mysql_fetch_array($query);
                        ?>
                        <div align="left"><span class="STYLE22">&nbsp;&nbsp;&nbsp;&nbsp;共有<strong>
                                    <?php echo $rs[0] ?></strong> 条记录</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

