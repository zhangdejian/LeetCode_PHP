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
    $res_start = array_slice($nums,0,count($nums)-$k);
    $res_end   = array_slice($nums,count($nums)-$k,$k);
    return array_merge($res_end,$res_start);
}
/**
 * 解法: 哈希函数
 * 思路: 先截取出前n-k个元素到一个新数组，再截取后k个元素到另外一个新数组，最后倒序合并这两个数组即可
 * 时间复杂度: O(n)
 * 空间复杂度: O(n)
 * 使用了新数组空间
 */
$nums = [1,2,3,4,5,6,7,10];
$k = 3;
var_dump(rotate($nums,$k));