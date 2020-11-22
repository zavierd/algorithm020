<?php
/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return NULL
 *  旋转数组
 */
function rotate(&$nums, $k) {
    $c = count($nums);
    if($c < 2 || $k == 0 || $k == $c)
        return $nums;
    if($k > $c)
        $k = $k%$c;
    if($k == 0)
        return $nums;

    foreach($nums as $key => $value){
        $t = $key + $k;
        if($t >= $c){
            $nums[f][$t] = $value;
            unset($nums[$key]);
        }
    }
    if(empty($nums[f])){
        return $nums;
    }

    $nums = $nums[f] + $nums ;
    unset($nums[f]);
    return $nums;
}