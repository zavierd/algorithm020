<?php
class Solution {
    private $result = [];
    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    function combine($n, $k) {
        if ($n <= 0 || $k <= 0 || $k > $n) return [];
        $this->helper($n, $k, [], 1);
        return $this->result;
    }

    private function helper($n, $k, $list, $start)
    {
        if (count($list) == $k) {
            $this->result[] = $list;
            return;
        }

        // 此时剩余可选数字个数 $n - $i + 1
        // 所需数字个数 $k - count($list)
        for ($i = $start; $n - $i + 1 >= $k - count($list); ++$i) {
            $list[] = $i;
            $this->helper($n, $k, $list, $i + 1);
            array_pop($list);
        }
    }
}