<?php
/**
 * User: zavier
 * Date: 2021/1/3 11:42 下午
 * Email: <1262660796@qq.com>
 */
class Solution {

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
        $num = 0;
        foreach ($grid as $y => &$row) {
            foreach ($row as $x => &$cell) {
                if ($cell == 1) {
                    $this->flipIslands($grid, $y, $x);
                    $num ++;
                }
            }
        }
        return $num;
    }

    function flipIslands(&$grid, $y, $x) {
        if (isset($grid[$y][$x]) && $grid[$y][$x] == 1) {
            $grid[$y][$x] = 2;
            if (isset($grid[$y][$x+1]) && $grid[$y][$x+1] == 1) {
                $this->flipIslands($grid, $y, $x+1);
            }
            if (isset($grid[$y][$x-1]) && $grid[$y][$x-1] == 1) {
                $this->flipIslands($grid, $y, $x-1);
            }
            if (isset($grid[$y+1][$x]) && $grid[$y+1][$x] == 1) {
                $this->flipIslands($grid, $y+1, $x);
            }
            if (isset($grid[$y-1][$x]) && $grid[$y-1][$x] == 1) {
                $this->flipIslands($grid, $y-1, $x);
            }
        }
    }
}