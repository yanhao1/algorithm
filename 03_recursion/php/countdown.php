<?php
/**
 * Created by PhpStorm.
 * User: yanhao
 * Date: 2018/9/14
 * Time: 上午10:19
 */

function countdown($i){
    echo $i;
    if ($i <= 0){
        return ;
    }else{
        countdown($i -1);
    }
}

countdown($i);