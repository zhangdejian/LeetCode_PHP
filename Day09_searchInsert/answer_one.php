<?php
/**
 * Created by PhpStorm.
 * User: zhangdeTalk
 * Date: 2020-02-10
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function searchInsert($nums, $target) {
    for($i=0;$i<count($nums);$i++){
        if($nums[$i] >= $target){
            return $i;
        }
    }
    return count($nums);
}
/**
 * 解法: 暴力法
 * 思路: 循环遍历数组，比较指针对应数组位置的值与目标值的对比，
 * 因为是已经排序好的数组，所以当出现大于等于时的指针就是结果，
 * 否则就是最大的值，数组再加一位
 * 时间复杂度: O(n)
 * 最好的情况是O(1)，最坏的情况是O(n)
 * 空间复杂度: O(1)
 * 没有额外空间被使用
 * 当数组长度大一点时，很容易超出时间限制和溢出内存，明显是一个很粗暴的解决方法
 */
$nums = [1,3,5,6];
$target = 7;
var_dump(searchInsert($nums, $target));