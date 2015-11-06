<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class mail_service {
    
    
    public function MailSend(){
        $config['protocol']="smtp";
        $config['smtp_host']="smtp.163.com";
        $config['smtp_user']="zangrenlan@163.com";
        $config['smtp_pass']="zll!@#123456";
        
        $fromaddr="zangliangliang@monstar-lab.cn";
        $fromname="zll";
        
        $path="/system/libraries/";
        
        require_once(dirname(__FILE__) . $path . "Email.php");
        $this->email->from($fromaddr,$fromname);
        $this->email->to($config['smtp_user']);
        $this->email->subject("test email");
        $this->email->message("this is a email for testing phpmail");
        if(!$this->email->send()){
            throw new Exception('error');
        };
        
    }

}