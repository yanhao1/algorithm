<?php
/**
 * Created by PhpStorm.
 * User: yanhao
 * Date: 2018/9/14
 * Time: 下午1:45
 */

function sum(array $arr){
    $total = 0;
    for ($x = 0;$x < count($arr);$x++){
        $total += $arr[$x];
    }
    return $total;
}


echo  sum([1,3,4,5,5,6]);