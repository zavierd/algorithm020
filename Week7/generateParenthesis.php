<?php
/**
 * User: zavier
 * Date: 2021/1/3 11:44 下午
 * Email: <1262660796@qq.com>
 */
class Solution {

    private $strings = [];

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $this->generate($n, 0, 0, "");
        return $this->strings;
    }

    /**
     * 递归子程序
     * @param Integer $n        生成括号的对数
     * @param Integer $left     左括号数
     * @param Integer $right    右括号数
     * @param String  $s        括号
     * @author: zavier
     * @data: 2020/12/2 10:12 下午
     */
    function generate($n, $left, $right, $s) {
        // 1.recursion terminator [递归终结条件]
        if ($left == $n && $right == $n) {
            $this->strings[] = $s;
            return;
        }
        // 2.process logic in current level [处理当前层逻辑]

        // 3.drill down [下探到下一层]
        if ($left < $n) {
            // 左括号+1
            $this->generate($n, $left + 1, $right, $s . "(");
        }
        if ($right < $left) {
            // 右括号+1
            $this->generate($n, $left, $right + 1, $s . ")");
        }

        // 4.reverse the current level status if needed [递归结束清理当前层(如果有需要)]
    }
}