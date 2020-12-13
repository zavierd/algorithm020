<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        if($nums == null) return false;

        $endReachable = count($nums) - 1;

        for ($i = count($nums) - 1; $i >= 0 ; $i--) {
            if($nums[$i] + $i >= $endReachable) {
                $endReachable = $i;
            }
        }
        return  $endReachable == 0;
    }
}