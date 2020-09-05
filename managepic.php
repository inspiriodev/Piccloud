<?php
require ("testlogged.php");
$num=0;
$pics=[];
$handle=opendir('./pictures');
if ($handle){
    while (false!==($file=readdir($handle))){
        if ($file!='.'&&$file!='..'){
            $pics[$num]="pictures/".$file;
            $num++;
        }
    }
}
?>
<meta charset="UTF-8">
<head>
    <title>管理你的图片</title>
</head>
<body>
<table width="300px" border="0">
    <?php
    foreach ($pics as $pic){
        echo "<tr>";
        echo "<td style=\"height:200px;width:200px;\">";
        echo "<img src=\"".$pic."\" alt=\"".$pic."\" width=\"200\" height=\"200\">";
        echo "</td>";
        echo "<td>";
        echo "<form action='delete.php' method='get'>";
        echo "<input type='hidden' name='filename'";
        echo "value=\"".$pic."\">";
        echo "<input type='submit' value='删除图片'>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>