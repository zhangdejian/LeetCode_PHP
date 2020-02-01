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
    $res = [];
    for($i=0;$i<count($nums1);$i++){
        if(in_array($nums1[$i],$nums2)){
            $res[] = $nums1[$i];
        }
    }
    return array_unique($res);
}
/**
 * 解法: 迭代一个数组，判断是否存在另外一个数组
 * 时间复杂度O(mn)
 *
 */
$nums2 = [2,4,6,7,8,99];
$nums1 = [1,2,5,9,9,66,89,90,99,99];
var_dump(intersection($nums1, $nums2));