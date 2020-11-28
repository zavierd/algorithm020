<?php
/**
 * 双循环嵌套
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum1($nums, $target) {
    $length = count($nums);
    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if($nums[$i] + $nums[$j] == $target){
                return [$i, $j];
            }
        }
    }
    return [];
}

function twoSum2($nums, $target) {
    $length = count($nums);
    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if($nums[$i] + $nums[$j] == $target) {
                return [$i, $j];
            }
        }
    }
    return [];
}

function twoSum3($nums, $target) {
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = $i + 1; $j < count($nums); $j++) {
            if($nums[$i] + $nums[$j] == $target) {
                return [$i, $j];
            }
        }
    }
    return [];
}

function twoSum4($nums, $target) {
    $length = count($nums);
    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if($nums[$i] + $nums[$j] == $target) {
                return [$i, $j];
            }
        }
    }
    return [];
}

function twoSum5($nums, $target) {
    $l = count($nums);
    for ($i = 0; $i < $l; $i++) {
        for ($j = $i + 1; $j < $l; $j++) {
            if($nums[$j] + $nums[$i] == $target) {
                return [$i, $j];
            }
        }
    }
    return [];
}

// hashMap
function twoSum6($nums, $target) {
    $hashMap = [];
    foreach ($nums as $key => $value) {
        if(isset($hashMap[$target - $value])) {
            return [$hashMap[$target - $value], $key];
        }
        $hashMap[$value] = $key;
    }
    return [];
}

function twoSum7($nums, $target) {
    $hashMap = [];
    foreach ($nums as $key => $value) {
        if(isset($hashMap[$target - $value])) {
            return [$hashMap[$target - $value], $key];
        }
        $hashMap[$value] = $key;
    }
    return [];
}

function twoSum8($nums, $target) {
    $hashMap = [];
    foreach ($nums as $key => $value) {
        if(isset($hashMap[$target - $value])) {
            return [$hashMap[$target - $value], $key];
        }
        $hashMap[$value] = $key;
    }
    return [];
}

function twoSum9($nums, $target) {
    $hashMap = [];
    foreach ($nums as $key => $value) {
        if(isset($hashMap[$target - $value])) {
            return [$hashMap[$target - $value], $key];
        }
        $hashMap[$value] = $key;
    }
    return [];
}

function twoSum($nums, $target) {
    $hashMap = [];
    foreach ($nums as $key => $value) {
        if(isset($hashMap[$target - $value])) {
            return [$hashMap[$target - $value], $key];
        }
        $hashMap[$value] = $key;
    }
    return [];
}