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
    $k %=count($nums);
    $nums = reverse($nums,0,count($nums)-1);
    $nums = reverse($nums,0,$k-1);
    $nums = reverse($nums,$k,count($nums)-1);
    return $nums;
}

/**
 * @param $nums
 * @param $start
 * @param $end
 * @return mixed
 */
function reverse($nums,$start,$end){
    while($start<$end){
        $temp = $nums[$start];
        $nums[$start] = $nums[$end];
        $nums[$end] = $temp;
        $start++;
        $end--;
    }
    return $nums;
}
/**
 * 解法: 反转法
 * 思路: 当我们旋转k次后，k%n个尾部元素会移动到数组前头，剩余的元素被往后移动
 * 首先将所有数组反转，接着再把前k个元素反转，最后再反转后n-k个元素
 * 假设 nums = [1,2,3,4,5,6,7] n=7 且 k=3
 * 反转所有元素：[7,6,5,4,3,2,1]
 * 反转前k个元素：[5,6,7,4,3,2,1]
 * 反转后n-k个元素：[5,6,7,1,2,3,4] 此时即为结果
 * 时间复杂度: O(n)
 * n个元素被反转了3次，即3*O(n)，还是O(n)
 * 空间复杂度: O(1)
 * 没有额外空间被使用
 */
$nums = [1,2,3,4,5,6,7,10];
$k = 4;
var_dump(rotate($nums,$k));