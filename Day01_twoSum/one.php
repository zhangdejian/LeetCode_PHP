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
        for($j=$i+1;$j<count($nums);$j++){
            if($nums[$i] + $nums[$j] == $target){
                return [$i,$j];
            }
        }
    }
    return [-1,-1];
}
/**
 * 解法: 暴力法
 * 思路: 遍历每个元素 x，并查找是否存在一个值与 target−x 相等的目标元素
 * 时间复杂度: O(n^2)
 * 对于每个元素，我们试图通过遍历数组的其余部分来寻找它所对应的目标元素，这将耗费 O(n) 的时间
 * 空间复杂度: O(1)
 *
 */
$nums = [0,3,5,8,6,9];
$target = 13;
var_dump(twoSum($nums,$target));