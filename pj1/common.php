<?php
function getLastTime(){
    date_default_timezone_set("Asia/tokyo");
    if(!empty($_COOKIE['lastvist'])){
        echo "you visted at" . $_COOKIE['lastvist']; 
        setCookie("lastvist",date("Y-m-d H:i:s"),time()+24*3600*30);
    }else{
        echo "this is the first time that you visit it";
        setCookie("lastvist",date("Y-m-d h:i:s"),time()+24*3600*30);
    }
}

function getCookie($key){
    if(empty($_COOKIE[$key])){
        return "";
    }else{
        return $_COOKIE[$key];
    }
}

function checkUserValidate(){
    session_start();
    if(empty($_SESSION['loginuser'])){
        header('location:login.php?errno=1');
    }
}
?>
