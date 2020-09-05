<?php
function checkFileType($files){
    $pass=['image/gif','image/jpeg','image/png','image/bmp','image/jpg'];
    try{
        if (in_array($files["file"]["type"],$pass)){
            return 1;
        }
    }
    catch(Exception $e){
        return 3;
    }
    return 2;
}