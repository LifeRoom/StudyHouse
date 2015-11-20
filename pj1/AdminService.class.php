<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'SqlHelper.class.php';
//task logic class to admin table
class AdminService{
    
    //check variable function
    public function checkAdmin($id,$password){
        
        //sql
        $UserSql="select name,password from admin where id=$id";
        
        //create sqlhelper object
        $sqlHelper=new SqlHelper();
        $res=$sqlHelper->execute_dql($UserSql);
        if($row=$res->fetch_assoc()){
            if(md5($password)==$row['password']){
                return $row['name'];
            }
        }
        $res->free();
        $sqlHelper->close_connect();
    }
}
