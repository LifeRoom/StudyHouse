<?php

class Login extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
    }
    
    
    /**
     * method: 
     *   post
     * $user_data:
     *   {"nickname":"wang", "password":"1111"}
     */    
    public function user_data(){
            /*user info*/
            $user_info = array(array('nickname' => 'zangliangliang','password' => 'monstarlab'),
                                array('nickname' => 'jiaoxiaofeng','password' => 'monstarlab'),
                                array('nickname' => 'jinlili','password' => 'monstarlab'),
                                array('nickname' => 'shangguanlei','password' => 'monstarlab'),
                                array('nickname' => 'chentao','password' => 'monstarlab'),
                                array('nickname' => 'liuhaitao','password' => 'monstarlab'),                
            );

        try{
            /*json from client*/
            $user_data=$this->input->post('user_data',TRUE);
            /*for test*/    
            //$user_data=json_encode($user_data);
            /*json decode*/
            $param=json_decode($user_data,TRUE);
            
            /*param judge*/
            if(is_null($param)){
                throw new Exception("Json Error");
            }
            /*judge if the legal user*/
            foreach($user_info as $user){
                if(($user['nickname']==$param['nickname']) && ($user['password']==$param['password'])){
                    $this->code='Succeed';
                    $ExistFlag=1;
                    break;
                }                
            }
            /*illegal user*/
            if((!isset($ExistFlag)) || ($ExistFlag!=1) ){
                $this->code="Failed";
            }
            /*result*/
            $result_array=array('status'=>$this->code,'result'=>$param);
            $result=json_encode($result_array);
            header('Content-type: application/json;charset=utf-8');
            header('Cache-Control: no-cache');
            die($result);            
        } catch (Exception $e) {
            $this->code="Failed";
    }
    }
     
}

