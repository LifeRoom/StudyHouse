<?php

SendMail();

function SendMail(){
    require_once('mail_service.php');
    $mailc=new mail_service;
    $mailc->MailSend();
}

//class test {
//    public static $profiler  = null;
    
//    function testa(){
//        $a=(!self::$profiler);
//        echo $a;
//    }
    
/**
 * test for printing the comment
 * 
 * @var boolean
 */
//var $testcommentout = false;

//static $testvar;
//echo isset($testvar)===false;
//$members="丁 朝勇, 万 晓, 上官 磊, 付 乐天, 代 兵, 何 奇林, 何 森林, 何 美霖, 刘 一帆, 刘 东, 刘 博, 刘 嘉驹, 刘 悦, 刘 文娟, 刘 海涛, 刘 琼, 史 文魁, 叶 盛龙, 吴 佳键, 周 廷泽, 周 开庆, 周 立芳, 周 维平, 周 花容, 唐 东明, 唐 健, 张 华, 张 挺, 张 毅敏, 张 立群, 张 艳, 徐 敏芳, 徐 礼, 施 文婷, 曾 静, 曾 飞, 权 基幸, 李 帅, 李 情, 李 方权, 李 杨, 李 艺, 李 请龙, 李 钊, 杨 小翠, 杨 超, 林 芯竹, 樊 林, 汪 帆, 汪 燕, 汪 雨浩, 潘 亚玲, 王 亚博, 王 建松, 王 杰, 王 玲, 王 莹, 白 宗悛, 矫 晓峰, 秦 跃龙, 程 顺涛, 童 撷璇, 罗 佳, 罗 坤, 罗 成, 罗 杨, 肖 言涛, 胡 松, 胥 江, 臧 亮亮, 董 映, 蒋 晓丽, 蔡 旭东, 袁 磊, 邓 佳鑫, 郑 玮婕, 郭 凯, 金 丽丽, 陈 学瑜, 陈 宏陽, 陈 志权, 陈 涛, 陈 秋霞, 陈 露, 雷 宇, 韩 志伟, 韩 波, 韩 磊, 顾 定全, 首 汉兰, 马 涛, 黄 华, 黄 家卫, 黄 映雪, 黄 超";
//echo substr_count($members,",");

//$alt="test111";
//echo $alt[0];
//class Test
//{   
    //var $test;
 //   function testisset($content){

   //     echo isset($content) . "</br>";
        //echo __FILE__;
        //echo "</br>";
        //$s=1;
        //$a=&$s;
        //$s=2;
        //echo $a;
        //echo "</br>";
        //echo $s;
        
    //}
//}


//echo(strlen(mb_convert_encoding("あいうえおかきくけこ", 'SJIS', 'UTF-8')));
//echo "</br>";
//echo(strlen(mb_convert_encoding("ｱｲｳｴｵｶｷｸｹｺ", 'SJIS', 'UTF-8')));

//$a=strlen(mb_convert_encoding("１1", 'SJIS', 'UTF-8'));
//echo $a;
//echo phpinfo();
//}
