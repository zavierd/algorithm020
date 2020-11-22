<?php
/**
 * @param Integer[] $nums
 * @return Integer
 * 删除排序数组中的重复项
 */
function removeDuplicates(&$nums) {
    $count = count($nums);

    if ($count <= 1) {
        return $count;
    }

    $num = $nums[0];
    $length = 1;

    for ($i = 1; $i < $count; $i++) {
        if ($nums[$i] == $num) {
            unset($nums[$i]);
        } else {
            $num = $nums[$i];
            $length++;
        }
    }

    return $length;
}
