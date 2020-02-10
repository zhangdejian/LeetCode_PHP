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
    $left = 0;
    $right = count($nums)-1;
    while($left<=$right){
        $mid = intval(($left+$right)/2);
        if($nums[$mid] == $target){
            return $mid;
        }elseif($nums[$mid] > $target){
            $right = $mid -1;
        }else{
            $left = $mid+1;
        }
    }
    return $left;
}
/**
 * 解法: 二分查找
 * 思路:
 * 先设定左侧下标 left 和右侧下标 right，再计算中间下标 mid
 * 每次根据 nums[mid] 和 target 之间的大小进行判断，相等则直接返回下标，
 * nums[mid] < target 则 left 右移，
 * nums[mid] > target 则 right 左移
 * 查找结束如果没有相等值则返回 left，该值为插入位置
 * 时间复杂度: O(logn)
 * 最好的情况是O(1)，最坏的情况是O(logn)
 * 空间复杂度: O(1)
 * 没有额外空间被使用
 */
$nums = [1,3,5,6,88,90];
$target = 100;
var_dump(searchInsert($nums, $target));

/**
 * 二分查找的模板
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function blade($nums, $target) {
    $left = 0;
    $right = count($nums)-1;
    while($left<=$right){//注意条件界限
        $mid = intval(($left+$right)/2);//注意取整
        if($nums[$mid] == $target){
            //相关逻辑处理;
        }elseif($nums[$mid] > $target){//注意right向左偏移
            $right = $mid -1;
        }else{//注意left向右偏移
            $left = $mid+1;
        }
    }
    //相关值返回
    return 0;
}