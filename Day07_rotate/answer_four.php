<?php
/**
 * Created by PhpStorm.
 * User: zhangdeTalk
 * Date: 2020-02-05
 * @param Integer[] $nums
 * @param Integer $k
 * @return NULL
 */
function rotate(&$nums, $k) {
    $start = count($nums)-$k;
    $res = array_slice($nums,0,$start);
    for($i=count($nums)-1;$i>=$start;$i--){
        array_unshift($res,$nums[$i]);
    }
    return $res;
}
/**
 * 解法: 循环遍历（k次）+哈希函数
 * 思路: 先截取出前n-k个元素到一个新数组，循环遍历k次（从最后一个元素倒序遍历），把每次循环的指针位置对应的元素插到新数组前边
 * 时间复杂度: O(n)，其中n为k
 * 只遍历了k次
 * 空间复杂度: O(n)
 * 使用了新数组空间
 */
$nums = [1,2,3,4,5,6,7,10];
$k = 3;
var_dump(rotate($nums,$k));