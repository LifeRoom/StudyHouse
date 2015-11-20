<?php

/* 
 * chinasoft-tokyo zll
 * 2015-11
 */

require_once 'AdminService.class.php';

//接收数据
//id
$id=$_POST['id'];
//password
$password=$_POST['password'];

$adminService=new AdminService();
if($name=$adminService->checkAdmin($id,$password)){
    header("location:usermain.php?name=$name");
    exit();
}else{
    header("location:login.php?errno=1");
    exit();
}
