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
    for($i=0;$i<$k;$i++){
        $last = $nums[count($nums)-1];
        for($j=0;$j<count($nums);$j++){
            $temp = $nums[$j];
            $nums[$j] = $last;
            $last = $temp;
        }
    }
    return $nums;
}
/**
 * 解法: 暴力法
 * 思路: 遍历两次，先旋转k次，每次将数组旋转一个元素（将数组中每个元素和最后一个元素值进行交换）
 * 时间复杂度: O(k*n)
 * 每个元素都被移动1步:O(n）,k次:O(k)
 * 空间复杂度: O(1)
 * 没有额外空间被使用
 * 当数组长度大一点时，很容易超出时间限制，明显是一个很粗暴的解决方法
 */
$nums = [1,2,3,4,5,6,7,10];
$k = 3;
var_dump(rotate($nums,$k));