<?php
/**
 * Created by PhpStorm.
 * User: zhangdeTalk
 * Date: 2020-02-02
 * @param String $s
 * @return Integer
 */
function romanToInt($s) {
    $values = [900,400,90,40,9,4,1000,500,100,50,10,5,1];
    $keys = ['CM','CD','XC','XL','IX','IV','M','D','C','L','X','V','I'];//特殊情况组合优先排序
    $res = 0;
    for($i=0;$i<count($keys) && strlen($s) > 0;$i++){
        $res += substr_count($s,$keys[$i])*$values[$i];//出现的次数
        $s = str_replace($keys[$i],'',$s);//剔除已出现过的罗马数字
    }
    return $res;
}
/**
 * 解法: 循环遍历+辅助函数+哈希表映射
 * 思路:
 * 先把罗马数字和对应的值分别放入两个数组（需要把特殊情况组合优先排前边，这步很关键），再遍历罗马数字数组
 * 使用字符串函数substr_count()和str_replace()辅助
 * 依次叠加出现在目标值中的罗马数字计算出相应的值，并剔除掉已出现过的罗马数字
 * 时间复杂度: O(n)
 */
var_dump(romanToInt('MCMXCIV'));