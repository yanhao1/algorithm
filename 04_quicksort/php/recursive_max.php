<?php
/**
 * Created by PhpStorm.
 * User: yanhao
 * Date: 2018/9/14
 * Time: 下午1:55
 */


function recMax($list){
    if (count($list) ==2){
        return $list[0]>$list[1] ? $list[0] :$list[1];
    }
    $subMax = recMax(array_splice($list,1));
    return $list[0] >$subMax ?$list[0] : $subMax;
}


echo recMax([1,3,5,8,9,1]);