<?php
/**
 * Created by PhpStorm.
 * User: zhangdeTalk
 * Date: 2020-02-09
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    if(count($nums)==0){
        return 0;
    }
    $slow = 0;
    for($fast=1;$fast<count($nums);$fast++){
        if($nums[$slow] != $nums[$fast]){
            $slow++;
            $nums[$slow] = $nums[$fast];
        }
    }
    return $slow+1;
}
/**
 * 解法: 双指针法
 * 思路:
 * 1、数组完成排序后，我们可以放置两个指针i和j，其中i是慢指针，而j是快指针。只要nums[i]=nums[j]，我们就增加j以跳过重复项。
 * 2、当我们遇到nums[j]!=nums[i]时，跳过重复项的运行已经结束，因此我们必须把它（nums[j]）的值复制到nums[i+1]。
 * 然后递增i，接着我们将再次重复相同的过程，直到j到达数组的末尾为止。
 * 时间复杂度: O(n)
 * 假设数组的长度是n，那么i和j分别最多遍历n步。
 * 空间复杂度: O(1)
 */
$nums = [1,2,3,4,5,6,7,8,8,8,9,9,9];
var_dump(removeDuplicates($nums));