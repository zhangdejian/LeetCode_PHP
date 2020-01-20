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
    $find = [];
    for($i=0;$i<count($nums);$i++){
        $difNum = $target - $nums[$i];
        if(array_key_exists($difNum,$find)){
            return [$find[$difNum],$i];
        }
        $find[$nums[$i]] = $i;
    }
}
/**
 * 解法: 一遍哈希表
 * 思路: 采用数组函数array_key_exists来解题， 判断数组是否存在此键名，array_key_exists是一个哈希函数
 * 时间复杂度:O(n)
 * 我们把包含有 n个元素的列表遍历两次。由于哈希表将查找时间缩短到O(1) ，所以时间复杂度为O(n)
 * 空间复杂度:O(n)
 * 所需的额外空间取决于哈希表中存储的元素数量，该表中存储了n个元素
 */
$nums = [0,3,5,8,6,9];
$target = 13;
var_dump(twoSum($nums,$target));