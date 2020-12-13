<?php
class Solution {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        if($bills == null) return false;
        $five = $ten = 0;

        foreach ($bills as $key => $value) {
            if($bills[$key] == 5) {
                $five ++;
            } elseif ($bills[$key] == 10) {
                if($five == 0) return false;
                $ten ++;
                $five --;
            } else {
                if($ten > 0 && $five > 0) {
                    $ten --;
                    $five --;
                } elseif ($five > 2) {
                    $five -= 3;
                } else {
                    return false;
                }
            }
        }
        return true;
    }
}