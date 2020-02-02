<?php
/**
 * Created by PhpStorm.
 * User: zhangdeTalk
 * Date: 2020-02-02
 * @param String $s
 * @return Integer
 */
function romanToInt($s) {
    $arr = [
        'I'=>1,
        'V'=>5,
        'X'=>10,
        'L'=>50,
        'C'=>100,
        'D'=>500,
        'M'=>1000
    ];
    $res = 0;
    for($i=0;$i<strlen($s);$i++){
        if(!empty($arr[$s[$i+1]]) && $arr[$s[$i+1]] > $arr[$s[$i]]){
            $res += $arr[$s[$i+1]] - $arr[$s[$i]];
            $i += 1;
        }else{
            $res += $arr[$s[$i]];
        }
    }
    return $res;
}
/**
 * 解法: 循环遍历判断
 * 思路:
 * 遍历目标罗马数字，并进行判断，若判断是单个罗马数字，是则直接叠加此值，并继续往前推移判断
 * 若判断是两个罗马数字组合（6种特殊情况之一），是则按照规则计算出值并叠加，指针+1继续往前推移判断
 * 时间复杂度: O(n)
 */
var_dump(romanToInt('MCMXCIV'));