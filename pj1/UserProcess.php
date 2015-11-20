<?php

/* 
 * chinasoft-tokyo zll
 * 2015-11
 */
        require_once 'UserService.class.php';
        
        $userService= new UserService();        
        
        //delete
        if(!empty($_GET['flag'])){
            $id=$_GET['id'];
            if($_GET['flag']=='del'){
                if($userService->delUserById($id)==1){
                    header("location:ok.php");
                    exit();
                }else{
                     header("location:error.php");
                }
            }
        }