<?php
/**
 * Created by PhpStorm.
 * User: zhangdeTalk
 * Date: 2020-01-17
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function search($nums, $target) {
    $left = 0;//左边从第一个元素开始
    $right = count($nums)-1;//右边从最后一个元素开始
    while($left <= $right){
        $mid = intval(($left + $right) / 2);//以中间点做参照点比较
        if($nums[$mid] == $target){//中间点值与目标相等，则找到返回
            return $mid;
        }elseif($nums[$mid] < $target){//查找目标值比参照点大，舍去右边
            $left = $mid + 1;
        }elseif($nums[$mid] > $target){//查找目标值比参照点小，舍去左边
            $right = $mid - 1;
        }
    }
    return -1;
}
/**
 * 解法: 非递归二分查找
 * 思路: 折半查找，通过遍历，一分为二，两边比较，不断往中间移动，直到中间值等于目标值为止
 * 时间复杂度: O(logn)
 * 每次可以舍去一半的查找区间
 * 空间复杂度: O(1)
 * 由于辅助空间是常数级别
 */
$nums = [1,2,3,6,9];
$target = 1;
echo search($nums,$target);