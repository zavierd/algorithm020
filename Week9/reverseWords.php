<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $s=explode(' ',$s);
        $new=[];
        foreach ($s as $key =>$val){
            $str=strrev($val);
            array_push($new,$str);
        }
        return implode(' ',$new);
    }
}