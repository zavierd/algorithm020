<?php
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        $sum = 0;
        while($n != 0) {
            $sum ++;
            $n &= ($n - 1);
        }
        return $sum;
    }
}