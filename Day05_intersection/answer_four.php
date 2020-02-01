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
    sort($nums1);
    sort($nums2);
    $i = $j = 0;
    $res = [];
    while($i < count($nums1) && $j < count($nums2)){
        if($nums1[$i] == $nums2[$j]){
            $res[] = $nums1[$i];
            $i++;
            $j++;
        }elseif($nums1[$i] < $nums2[$j]){
            $i++;
        }elseif($nums1[$i] > $nums2[$j]){
            $j++;
        }
    }
    return array_unique($res);
}
/**
 * 解法: 双指针
 * 思路: 先把两个数组排序，通过双指针往前推来进行查找
 * 时间复杂度O(nlogn)
 *
 */
$nums2 = [2,4,6,7,8,99];
$nums1 = [1,2,5,9,9,66,89,90,99,99];
var_dump(intersection($nums1, $nums2));