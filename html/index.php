<?php
include "flag.php";
highlight_file("index.php");
error_reporting(0);

if (isset($_GET['name']) && isset($_GET['password'])){
    $name = $_GET['name'];
    $password = $_GET['password'];
    if ($name != $password && md5($name) == md5($password)){
        echo "好吧好吧，拿去吧，真拿你没办法：".$flag;
    }
    else {
        echo "不对，不对，你再这样我要闹了;w;";
    }

}
else {
    echo '你参数呢，全都输进去啊，别漏了=W=';
}
?>