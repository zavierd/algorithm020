<?php
class Solution {
    /**
     * @param  $root
     * @param  $p
     * @param  $q
     * @return
     */
    function lowestCommonAncestor($root, $p, $q) {
        // 排除空
        if ($root == null) return null;
        if ($root->val == $p->val || $root->val == $q->val) return $root;

        $left = $this->lowestCommonAncestor($root->left, $p, $q);
        $right = $this->lowestCommonAncestor($root->right, $p, $q);

        if ($left !== null && $right !== null) return $root;
        if ($left === null) return $right;
        if ($right === null) return $left;
        return null;
    }
}