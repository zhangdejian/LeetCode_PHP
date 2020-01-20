<?php
/**
 * Created by PhpStorm.
 * User: zhangdeTalk
 * Date: 2020-01-17
 * @param Integer[] $nums
 * @param Integer $target
 * @param Integer $left
 * @param Integer $right
 * @return Integer
 */
function search($nums, $target, $left, $right) {
    $mid = intval (($left + $right)/2);//以中间点做参照点比较
    if($left > $right){
        return -1;
    }
    if($nums[$mid] == $target){//中间点值与目标相等，则找到返回
        return $mid;
    }elseif($nums[$mid] < $target){//查找目标值比参照点小，舍去左边，并进行递归
        return search($nums, $target, $mid+1, $right);
    }elseif($nums[$mid] > $target){//查找目标值比参照点大，舍去右边，并进行递归
        return search($nums, $target, $left, $mid-1);
    }
    return -1;
}
/**
 * 解法: 递归二分查找
 * 思路: 递归思想实现折半查找，通过遍历，一分为二，两边比较，不断往中间移动，直到中间值等于目标值为止
 * 时间复杂度: O(logn)
 * 每次可以舍去一半的查找区间
 * 空间复杂度: O(logn)
 */
$nums = [1,2,3,6,9];
$target = 6;
echo search($nums,$target,0,count($nums)-1);