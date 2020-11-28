<?php
//leetcode submit region begin(Prohibit modification and deletion)
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal1($root) {
        $arr = $res = [];
        if ($root == null) {
            return $res;
        }
        //设置当前节点
        $cur = $root;//根节点
        while($cur!=null || !empty($arr)){
            if($cur!=null){
                array_push($arr, $cur);
                $cur = $cur->left;
            }else{
                $cur = array_pop($arr);
                $res[] = $cur->val;
                $cur = $cur->right;
            }
        }
        return $res;
    }

    /**
     * @param $root
     * @author: zavier
     * @data: 2020/11/26 7:12 下午
     */
    function inorderTraversal2($root) {
        $res = [];
        $this->helper2($root,$res);
        return $res;
    }

    function helper2($root,&$res){
        if($root == null) return;
        $this->helper2($root->left,$res);
        $res[] = $root->val;
        $this->helper2($root->right,$res);
    }

    protected $ans = [];

    public function inorderTraversal3($root) {

        if ($root == null) {
            return $this->ans;
        }

        $this->inorderTraversal($root->left);
        $this->ans[] = $root->val;
        $this->inorderTraversal($root->right);

        return $this->ans;
    }

    public function inorderTraversal4($root) {
        if($root == null) {
            return $this->ans;
        }
        $this->inorderTraversal4($root->left);
        $this->ans[] = $root->val;
        $this->inorderTraversal4($root->right);

        return $this->ans;
    }

    function inorderTraversal5($root) {
        $res = [];
        $this->helper($root, $res);
        return $res;
    }

    function helper5($root, &$res) {
        if($root == null) {
            return;
        }
        $this->helper($root->left, $res);
        $res[] = $root->val;
        $this->helper($root->right, $res);
    }

    function inorderTraversal6($root) {
        $res = $stack = [];
        while($root != null || !empty($stack)) {
            while($root != null) {
                array_push($stack, $root);
                $root = $root->left;
            }
            $root = array_pop($stack);
            $res[] += $root->val;
            $root = $root->right;
        }
        return $res;
    }

    function inorderTraversal7($root) {
        $res = $stack = [];
        while($root != null || !empty($stack)){
            while ($root != null) {
                array_push($stack, $root);
                $root = $root->left;
            }
            $root = array_pop($stack);
            $res[] += $root->val;
            $root = $root->right;
        }
        return $res;
    }

    function inorderTraversal8($root) {
        $res = $stack = [];
        while($root != null || !empty($stack)) {
            while($root != null) {
                array_push($stack, $root);
                $root = $root->left;
            }
            $root = array_pop($stack);
            $res[] += $root->val;
            $root = $root->right;
        }
        return $res;
    }

    function inorderTraversal9($root) {
        $res = $stack = [];
        while($root != null || !empty($stack)) {
            while($root != null) {
                array_push($stack, $root);
                $root = $root->left;
            }
            $root = array_pop($stack);
            $res[] += $root->val;
            $root = $root->right;
        }
        return $res;
    }

    function inorderTraversal($root) {
        $res = $stack = [];
        while($root != null || !empty($stack)) {
            while($root != null) {
                array_push($stack, $root);
                $root = $root->left;
            }
            $root = array_pop($stack);
            $res[] += $root->val;
            $root = $root->right;
        }
        return $res;
    }
}