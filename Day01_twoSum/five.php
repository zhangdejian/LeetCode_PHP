<?php
/**
 * Created by PhpStorm.
 * User: zhangdeTalk
 * Date: 2020-01-14
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {
    $origin = $nums;
    sort($nums);
    $left = 0;
    $right = count($nums) - 1;
    while($left <= $right){
        if($nums[$left] + $nums[$right] == $target){
            $start = array_keys($origin,$nums[$left]);
            $end = array_keys($origin,$nums[$right]);
            return [reset($start),end($end)];
        }elseif($nums[$left] + $nums[$right] > $target){
            $right -= 1;
        }elseif($nums[$left] + $nums[$right] < $target){
            $left += 1;
        }
    }
}
/**
 * 解法: 二分查找法
 * 思路:
 * 用一个排序都能把复杂度降到 O(nlogn)，通过排序，然后用两个指针从前后扫描逼近真值
 * 注意这个思想，可以让 O(n^2) 的复杂度降为 O(n)，充分利用排序，因为一定会有一个值满足，然后通过值去原数组里找对应的下标。
 * 时间复杂度:O(logn)
 * 空间复杂度:O(1)
 */
$nums = [0,3,5,8,6,9];
$target = 13;
var_dump(twoSum($nums,$target));