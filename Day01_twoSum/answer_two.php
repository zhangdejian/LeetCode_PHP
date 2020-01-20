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
    for($i=0;$i<count($nums);$i++){
        $difNum = $target - $nums[$i];
        $keys = array_keys($nums,$difNum);
        foreach($keys as $key){
            if($key && $key != $i){
                return [$i,$key];
            }
        }
    }
    return [-1,-1];
}
/**
 * 解法: 两遍哈希表
 * 思路: 采用数组函数array_keys来解题， 返回包含数组中所有键名的一个新数组，array_keys是一个哈希函数
 * 时间复杂度:O(n)
 * 我们把包含有n个元素的列表遍历两次。由于哈希表将查找时间缩短到O(1) ，所以时间复杂度为O(n)
 * 空间复杂度:O(n)
 * 所需的额外空间取决于哈希表中存储的元素数量，该表中存储了n个元素
 */
$nums = [0,3,5,8,6,9];
$target = 13;
var_dump(twoSum($nums,$target));