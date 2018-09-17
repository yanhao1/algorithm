<?php
/**
 * Created by PhpStorm.
 * User: yanhao
 * Date: 2018/9/17
 * Time: 下午3:26
 */

$voted =[];
function check_voter($name){
    global $voted;
        if(isset($voted[$name])){
            print "kick them out!\n";
        }else{
            $voted[$name]= true;
            print "let them vote!\n";
        }
}


check_voter("tom");
check_voter("golang");
check_voter("test");
check_voter("php");