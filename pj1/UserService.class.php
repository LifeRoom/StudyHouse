<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'SqlHelper.class.php';

class UserService{
    
function getPageCount($pagesize){
    $pagesql="select count(1) as cnt from user";
    $sqlHelper=new SqlHelper();
    $res=$sqlHelper->execute_dql($pagesql);
    if($row=$res->fetch_assoc()){
        $pagecount=ceil($row['cnt']/$pagesize);
    }
    $res->free();
    $sqlHelper->close_connect();
    return $pagecount;
}

function getMemberByPage($pagesize,$pagenow){
    //sql
    $SqlMemPage="select *  from user limit " . $pagesize*($pagenow-1) . "," . $pagesize;
    
    $sqlHelper= new SqlHelper();
    $res=$sqlHelper->execute_dql_array($SqlMemPage);
    $sqlHelper->close_connect();
    return $res;
}

function getPaging($paging){
    $sqlHelper= new SqlHelper;
    $sql1="select * from user limit " . ($paging->pageNow-1)*$paging->pageSize . "," . $paging->pageSize;
    $sql2="select count(1) from user";
    $sqlHelper->execute_dql_paging($sql1, $sql2, $paging);
    $sqlHelper->close_connect();
}

}
