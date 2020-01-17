<?php
/**
 * Created by PhpStorm.
 * User: zhangdeTalk
 * Date: 2020-01-16
 * @param Integer $x
 * @return Integer
 */
function reverse($x) {
    if (!is_int($x)) return 0;
    $new_result = '';
    $max = pow(2,31)-1;
    $min = pow(-2,31);
    $zheng = true;
    if($x<0){
        $x = -$x;
        $zheng = false;
    }
    $lens = strlen($x);
    for($i=$lens-1;$i>=0;$i--){
        $new_result .= substr($x,$i,1);
    }
    $new_result = (int)$new_result;
    if(!$zheng){
        $new_result = -$new_result;
    }
    if($new_result > $max || $new_result < $min){
        return 0;
    }
    return $new_result;
}
/**
 * 难度: 简单
 * 标签: 数学
 * 解法: 把整数当字符串反转，再转整数
 * 思路: 遍历+辅助函数
 * 时间复杂度: O(n)
 * 空间复杂度: O(1)
 *
 */
$x = 199899;
var_dump(reverse($x));