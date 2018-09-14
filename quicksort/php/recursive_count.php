<?php
/**
 * Created by PhpStorm.
 * User: yanhao
 * Date: 2018/9/14
 * Time: 下午1:48
 */


function sum($list){
    if(count($list) === 0){
        return 0;
    }
    return  $list[0] + sum(array_splice($list,1));
}


echo sum([1,3,4,5,67,12]);