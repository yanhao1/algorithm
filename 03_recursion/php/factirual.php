<?php
/**
 * Created by PhpStorm.
 * User: yanhao
 * Date: 2018/9/13
 * Time: 下午5:47
 */


function fact($x){
    if ($x ===1){
        return 1;
    }else{
        return $x * fact($x -1);
    }
}


echo fact(5);