<?php
/**
 * Created by PhpStorm.
 * User: zhangdeTalk
 * Date: 2020-01-31
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer[]
 */
function intersection($nums1, $nums2) {
    return array_unique(array_intersect($nums1,$nums2));
}
/**
 * 解法: 内置数组函数
 */
$nums2 = [2,4,6,7,8,99];
$nums1 = [1,2,5,9,9,66,89,90,99,99];
var_dump(intersection($nums1, $nums2));