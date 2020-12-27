<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function numDecodings($s) {

        $n = strlen($s);
        $dp = array_fill(0, $n, 0);

        if ($s[0] == '0') return 0;
        $dp[0] = 1;//一个有效数只有一种解法
        for ($i=1; $i < $n; $i++) {
            if ($s[$i] != '0') $dp[$i] = $dp[$i - 1];
            if ($s[$i - 1] == '1' || ($s[$i - 1] == '2' && $s[$i] <= '6')) {
                // 有效范围内
                if ($i - 2 >= 0) {
                    $dp[$i] = $dp[$i] + $dp[$i - 2];
                }else {
                    $dp[$i] = $dp[$i] + 1;
                }
            }
        }

        return $dp[$n - 1];
    }
}