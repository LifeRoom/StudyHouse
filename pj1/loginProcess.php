<?php

/* 
 * chinasoft-tokyo zll
 * 2015-11
 */

require_once 'AdminService.class.php';

//接收数据
//id
$id=$_POST['id'];
if(empty($id)){
  include 'login.php';
  exit();
}
//password
$password=$_POST['password'];
if(!empty($_POST['keep'])){
    setCookie("id",$id,time()+7*24*3600);
}else{
    if(!empty($_COOKIE['id'])){
        setCookie("id","",time()-1);
    }
}

$adminService=new AdminService();
$name=$adminService->checkAdmin($id,$password);
if($name!==""){
    session_start();
    $_SESSION['loginuser']=$name;
    header("location:usermain.php?name=$name");
    exit();
}else{   
    header("location:login.php?errno=1");
    exit();
}
