<?php
require ("checkfile.php");
$t=checkFileType($_FILES);
if ($t==1){
    if ($_FILES["file"]["error"]>0){
        echo "上传文件失败：".$_FILES["file"]["error"]."<br/>";
    }
    else{
        if (file_exists("pictures/".$_FILES["file"]["name"])){
            echo "文件".$_FILES["file"]["name"]."已经存在";
        }
        else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"pictures/".$_FILES["file"]["name"]);
            echo "上传成功：";
            echo "<a href=\"pictures/";
            echo $_FILES["file"]["name"];
            echo "\">图片链接";
            echo "</a>";
        }
    }
}
else if($t==2){
    echo "文件不符合要求，文件后缀名应为：gif、jpeg、png、jpg、bmp";
}
else{
    echo "上传文件失败，请联系站长或管理员处理";
}