<?php
try{
    unlink($_GET["filename"]);
}
catch (Exception $e){
    echo "删除文件失败！";
}