<?php
require ("testlogged.php");
?>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title> Piccloud 图云</title>
</head>
<body>
<form action="managepic.php" method="post">
    <input name="submit" type="submit" value="管理图片"/>
</form>
<form action="upload.php"enctype="multipart/form-data" method="post">
    <input id="file" name="file" type="file" value="选择文件"/>
    <br/>
    请注意：仅支持上传后缀为jpg、png、jpeg、bmp、gif的文件，且大小不得超过50M，否则会出现错误
    <br/>
    <input name="submit" type="submit" value="上传文件"/>
</form>
</body>
</html>