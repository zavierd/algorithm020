<?php
/**
 * @param Integer[] $digits
 * @return Integer[]
 * 加一
 */
function plusOne($digits) {
    $res = '';
    for($i = count($digits) - 1;$i>=0;$i--){
        $res = $digits[$i];
        if($res == 9){
            $digits[$i] = 0;
            if($i == 0){
                array_unshift($digits,1);
                break;
            }
        }else{
            $digits[$i]++;
            break;
        }
    }
    return $digits;
}