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
        if(isset($find[$difNum])){
            return [$find[$difNum],$i];
        }
        $find[$nums[$i]] = $i;
    }
}
/**
 * 解法: 一遍哈希表
 * 思路: isset性能比array_key_exists要好，因为isset是语言结构，而array_key_exists是函数，语言结构的解析运行要比函数快一点。
 * 时间复杂度:O(n)
 * 我们把包含有 n个元素的列表遍历两次。由于哈希表将查找时间缩短到O(1) ，所以时间复杂度为O(n)
 * 空间复杂度:O(n)
 * 所需的额外空间取决于哈希表中存储的元素数量，该表中存储了n个元素
 */
$nums = [0,3,5,8,6,9];
$target = 13;
var_dump(twoSum($nums,$target));