function form_submit(){
    var username=document.getElementById("user").value;
    var password=document.getElementById("pwd").value;

    if(username.trim()==""){
        alert("请输入用户名！");
        return;
    }

    if(password.trim()==""){
        alert("请输入密码！");
        return;
    }

    if(username.trim()=="1"&&password.trim()=="1"){
        document.getElementById("login").submit();
    }else{
        alert("验证失败，请重新登陆！");
        return;
    }

}
function form_reset(){
	document.getElementById("login").reset();
}
function reloadcode(){
    var verify=document.getElementById('safecode');
    verify.setAttribute('src','code.php?'+Math.random());
}