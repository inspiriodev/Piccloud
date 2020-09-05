<title> Piccloud 图云</title>
<?php
    if (isset($_COOKIE['logged'])){//检测是否存在注册成功的cookie
        header("Location:"."manage.php");//自动转到manage.php
    }
    else{
        header("Location:"."login.html");//转到登录界面
    }