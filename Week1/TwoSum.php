<?php
/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 *  两数之和
 */
function twoSum($nums, $target) {
    $map = [];
    foreach($nums as $k=>$v){
        if($k == 0){
            $map = [$v=>$k];
            continue;
        }
        if(isset($map[$target - $v])){
            return [$map[$target - $v],$k];
        }else{
            $map += [$v=>$k];
        }
    }
}