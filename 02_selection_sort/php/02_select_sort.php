<?php
/**
 * Created by PhpStorm.
 * User: yanhao
 * Date: 2018/9/13
 * Time: 下午2:25
 */

function findSmall(& $list){
    $mall = $list[0];
    $index = 0;
    for($i=$index,$len= count($list);$i<$len;$i++){
        if($list[$i] <$mall){
            $mall = $list[$i];
            $index = $i;
        }
    }
    return $index;
}

function selectionSort($list){
    $sort = [];
    for ($i=0,$len= count($list);$i<$len;$i++){
        $index = findSmall($list);
        $sort[] = array_splice($list,$index,1)[0];
    }
    return $sort;
}


echo '[' . join(', ', selectionSort([5, 3, 6, 2, 10])) . ']' . PHP_EOL;

