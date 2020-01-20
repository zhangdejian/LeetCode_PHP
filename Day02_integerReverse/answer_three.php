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
    $new_result = 0;
    $max = pow(2, 31) - 1;
    $min = pow(-2, 31);
    while ($x != 0) {
        $pop = $x % 10;
        if ($new_result > $max/10 || ($new_result == $max/10 && $pop > 7)) return 0;
        if ($new_result < $min/10 || ($new_result == $min/10 && $pop < -8)) return 0;
        $new_result = $new_result * 10 + $pop;
        $x = ($x - $pop) / 10;
    }
    return $new_result;
}
/**
 * 解法: 数学
 * 思路:
 * 通过循环将数字x的每一位拆开，在计算新值时每一步都判断是否溢出。
 * 溢出条件有两个，一个是大于整数最大值MAX_VALUE，另一个是小于整数最小值MIN_VALUE，设当前计算结果为ans，下一位为pop。
 * 1、从ans * 10 + pop > MAX_VALUE这个溢出条件来看
 * 当出现 ans > MAX_VALUE / 10 且 还有pop需要添加 时，则一定溢出
 * 当出现 ans == MAX_VALUE / 10 且 pop > 7 时，则一定溢出，7是2^31 - 1的个位数
 * 2、从ans * 10 + pop < MIN_VALUE这个溢出条件来看
 * 当出现 ans < MIN_VALUE / 10 且 还有pop需要添加 时，则一定溢出
 * 当出现 ans == MIN_VALUE / 10 且 pop < -8 时，则一定溢出，8是-2^31的个位数
 * 时间复杂度：O(log(n))，n 中大约有 log10​(n) 位数字
 * 空间复杂度: O(1)
 *
 */
$x = -199899;
var_dump(reverse($x));