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
    $new_arr = array_merge(array_unique($nums1),array_unique($nums2));
    $res = [];
    for($i=0;$i<count($new_arr);$i++){
        for($j=$i+1;$j<count($new_arr);$j++){
            if($new_arr[$i] == $new_arr[$j]){
                $res[] = $new_arr[$i];
            }
        }
    }
    return array_unique($res);
}
/**
 * 解法: 暴力解法
 * 思路：先把两个数组合并为一个数组，再两次循环遍历查找
 * 时间复杂度O(n^2)
 *
 */
$nums2 = [2,4,6,7,8,99];
$nums1 = [1,2,5,9,9,66,89,90,99,99];
var_dump(intersection($nums1, $nums2));