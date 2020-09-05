<?php
if (!isset($_COOKIE['logged'])){//如果没有登录，跳转到登录界面
    header("Location:".'login.html');
}