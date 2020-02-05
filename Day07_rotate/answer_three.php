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
    $k = $k%count($nums);
    $count = 0;
    for($start=0;$count<count($nums);$start++){
        $current = $start;//当前位置的指针
        $prev = $nums[$start];
        do {
            $next = ($current+$k)%count($nums);
            $temp = $nums[$next];
            $nums[$next] = $prev;
            $prev = $temp;
            $current = $next;
            $count++;//控制循环的次数

        } while($start != $current);//开始位置和当前位置不同一个位置才进行元素移动
    }
    return $nums;
}
/**
 * 解法: 环状替换
 * 思路: 把数组当成环形的，把每个元素放到其后k个位置
 * 比如[1,2,3,4,5],k=2
 * 可以把这五个元素依次放在一个五边形的各个顶点，从元素为1的顶点开始依次往前移动2个位置，最后的数组[4,5,1,2,3,4]即为结果
 * 时间复杂度: O(n)
 * 只遍历了每个元素一次
 * 空间复杂度: O(1)
 * 使用了常数个额外空间
 */
$nums = [1,2,3,4,5,6,7,10];
$k = 3;
var_dump(rotate($nums,$k));