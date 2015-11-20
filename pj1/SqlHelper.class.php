<?php

/* 
 * chinasoft-tokyo zll
 * 2015-11
 */

class SqlHelper{
    
    private $conn;
    private $host="localhost";
    private $dbname="pj1";
    private $user="root";
    private $password="";
    
    public function __construct(){
        $this->conn=new mysqli($this->host,$this->user,$this->password,$this->dbname);
        if($this->conn->connect_error){
            die("connect failed" . $this->conn->connect_error);
        }
    }
    
    //dql
    public function execute_dql($sql){
        $res=$this->conn->query($sql) or die("dql:" .$this->conn->error);
        return $res;
    }

    //dql
    public function execute_dql_array($sql){
        $res=$this->conn->query($sql) or die("dql:" .$this->conn->error);
        $arr=array();
        while($row=$res->fetch_array()){
            $arr[]=$row;
        }
        $res->free();
        return $arr;
    }
    //dql paging
    public function execute_dql_paging($sql1,$sql2,&$paging){
        
        //Record Get
        $resList=$this->conn->query($sql1) or die($this->conn->error);
        
        $arr=array();
        
        //Record to array
        while($row=$resList->fetch_assoc()){
            $arr[]=$row;
        }
        //close recordset
        $resList->free();
        //return record array
        $paging->res_array=$arr;
        
        //Record count
        $resCount=$this->conn->query($sql2) or die($this->conn->error);
        //return record count 
        if($row=$resCount->fetch_row()){
            $paging->pageCount=ceil($row[0]/$paging->pageSize) or die($this->conn->error);
        }
        //close recordset
        $resCount->free();
        
        
        
        /*Navigate*/ 
        $paging->navigate="";

        //the pre page
        if($paging->pageNow>1){
            $prepage=$paging->pageNow-1;
            $paging->navigate= "<a href='userlist.php?pagenow=$prepage'>before</a> &nbsp;";
        }
        //the next page
        if($paging->pageNow<$paging->pageCount){
            $nextpage=$paging->pageNow+1;
            $paging->navigate  .= "<a href='userlist.php?pagenow=$nextpage'>next</a> &nbsp;";
        }
        
        //the first page in the navigate
        $start=  floor(($paging->pageNow-1)/10)*10+1;

        //the last page in the navigate
        $end=($start+9)<($paging->pageCount)?($start+9):($paging->pageCount);
        
        if($start>1){
            $paging->navigate  .= "<a href='userlist.php?pagenow=". ($start-1) ."'><<</a>";
        }    
        for($start=$start;$start<=$end;$start++){
            $paging->navigate  .= "<a href='userlist.php?pagenow={$start}'>{$start}</a> &nbsp;";
        }
        if($start<$paging->pageCount){
            $paging->navigate  .= "<a href='userlist.php?pagenow={$start}'>>></a>";        
        }
        
        $paging->navigate  .= "当前{$paging->pageNow}页/共{$paging->pageCount}页";        
        
        
    }
    
    //dml
    public function execute_dml($sql){
        $res=$this->conn->query($sql);
        if(!$res){
            return 0;//faile
        }elseif($this->conn->affected_rows>0){
            return 1;//ok
        }else{
            return 2;//no record be affected
        }
    }
    
    //close 
    public function close_connect(){
        if(!empty($this->conn)){
            $this->conn->close();
        }
    }
    
    
}
