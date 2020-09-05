<title> Piccloud 图云</title>
<?php
require("config.php");//引用config.php中的变量
if ($_POST["username"]==$username&&$_POST["password"]==$password){
    setcookie('logged',"1",time()+86400);//保存cookie
    header("Location:"."manage.php");
}
else{
    echo '密码错误，请返回上一界面重试';//输出密码错误信息
}