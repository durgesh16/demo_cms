<?php
function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
$path = url();
$path1 = trim($path,"admin/");
$db_url = $path1."/database/databaseconn.php";

//include $db_url;
include "C:\wamp64\www\demo/database/databaseconn.php";
include "layout/header.php";
include "layout/content.php";
include "layout/footer.php";
?>