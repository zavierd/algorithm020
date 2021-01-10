<?php
class Solution {

    /**
     * 暴力求解 字符串转化成数组 排序 再转化成字符串进行比较
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram1(string $s, string $t) {
        if(strlen($s) != strlen($t)) return false;
        $s = str_split($s);
        sort($s);
        $t = str_split($t);
        sort($t);
        if(implode('',$s) != implode('',$t)) return false;
        return true;
    }

    /**
     * 哈希表
     * @param String $s
     * @param String $t
     * @author: zavier
     * @data: 2020/11/24 2:49 下午
     */
    function isAnagram2(string $s, string $t) {
        $lengthS = strlen($s);
        $lengthT = strlen($t);
        $hashMap = [];
        if($lengthS != $lengthT) return false;
        for ($i = 0; $i < $lengthS; $i++) {
            $hashMap[$s[$i]] = isset($hashMap[$s[$i]]) ? $hashMap[$s[$i]] + 1 : 1;
        }
        for ($j = 0; $j < $lengthT; $j++) {
            if(!isset($hashMap[$t[$j]])) {
                return false;
            }elseif ($hashMap[$t[$j]] == 0) {
                return false;
            }else {
                $hashMap[$t[$j]]--;
            }
        }
        return true;
    }

    function isAnagram3(string $s, string $t) {
        return count_chars($s, 1) == count_chars($t, 1);
    }

    function isAnagram4($s, $t) {
        $lenS = strlen($s);
        $lent = strlen($t);
        if($lent != $lenS) return false;
        $map = [];
        for ($i = 0; $i < $lenS; $i++) {
            $map[$s[$i]] = ($map[$s[$i]] ?? 0 ) + 1;
        }
        for ($i = 0; $i < $lent; $i++) {
            if(!isset($map[$t[$i]]) || $map[$t[$i]] == 0) {
                return false;
            }
            $map[$t[$i]]--;
        }
        return true;
    }
    // hashMap
    function isAnagram($s, $t) {
        $lenS = strlen($s);
        $lenT = strlen($t);
        $map = [];
        if($lenS != $lenT) return false;
        for ($i = 0; $i < $lenS; $i++) {
            $map[$s[$i]] = ($map[$s[$i]] ?? 0) + 1;
        }
        for ($i = 0; $i < $lenT; $i++) {
            if(!isset($map[$t[$i]]) || $map[$t[$i]] == 0) {
                return false;
            }
            $map[$t[$i]]--;
        }
        return true;
    }
}