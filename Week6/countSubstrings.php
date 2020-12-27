<?php
class Solution {
    private $res = 0;

    function countSubstrings($s) {
        $s_length = strlen($s);
        for ($i = 0; $i < $s_length; $i++) {
            $this->around($s, $s_length, $i, $i);
            $this->around($s, $s_length, $i, $i + 1);
        }
        return $this->res;
    }

    function around($s, $s_length, $left, $right) {
        while ($left >= 0 && $right < $s_length && $s{$left} == $s{$right}) {
            $this->res++;
            $left--;
            $right++;
        }
    }
}