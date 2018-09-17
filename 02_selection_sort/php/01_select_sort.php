<?php
/**
 * Created by PhpStorm.
 * User: yanhao
 * Date: 2018/9/13
 * Time: 下午1:51
 */
//返回最小的数和下标
function fandSmall(array $arr){
    $small = $arr[0];
    $smallIndex = 0;
    for ($i=0;$i<count($arr);$i++){
        if ($arr[$i]<$small){
            $small = $arr[$i];
            $smallIndex= $i;
        }
    }
    return $smallIndex;
}

function selectionSort(array $arr){
    $newArr = [];
    for($i=0,$lenght= count($arr);$i<$lenght;$i++){
        $small = fandSmall($arr);
        array_push($newArr,array_splice($arr,$small,1)[0]);
    }
    return $newArr;
}


var_dump(selectionSort([5,2,1,6,7,8,9,10,22,42]));