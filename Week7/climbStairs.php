<?php
/**
 * User: zavier
 * Date: 2021/1/3 11:40 下午
 * Email: <1262660796@qq.com>
 */
class Solution {

    function climbStairs(int $n) {
        if($n <= 0) return 0;
        if($n == 1) return 1;
        if($n == 2) return 2;
        $a = 2;
        $b = 1;
        $c = 0;
        for ($i = 2; $i < $n; $i++) {
            $c = $b + $a;
            $b = $a;
            $a = $c;
        }
        return $c;
    }
}