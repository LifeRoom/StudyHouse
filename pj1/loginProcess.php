<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//接收数据
//id
$id=$_POST['id'];
//password
$password=$_POST['password'];

//database check
//connect database
$Conn=new mysqli("localhost","root","","pj1");
if($Conn->connect_error){
    die("connect failed" . $Conn->connect_error);
}

//set encode
$Conn->query("set names utf8") or die ($Conn->error);

//sql for check 
$UserSql="select name,password from admin where id=$id;";

if($CorrectPassword=$Conn->query($UserSql)){
    if($row=$CorrectPassword->fetch_assoc()){
        if(!($row['password']==md5($password))){
            header("location:login.php?errno=1");
        }else{
            $name=$row['name'];
            header("location:usermain.php?name=$name");
        } 
    }           
}else{
    header("location:login.php?errno=2");
}
$Conn->close();
