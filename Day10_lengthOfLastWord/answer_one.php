<?php
/**
 * Created by PhpStorm.
 * User: zhangdeTalk
 * Date: 2020-02-14
 * @param String $s
 * @return Integer
 */
function lengthOfLastWord($s) {
    $end = strlen($s) -1;
    while($end>=0 && $s[$end] == ' '){//过滤掉最右边的空格
        $end--;
    }
    if($end < 0){//当全部都是空格时
        return 0;
    }
    $start = $end;//此时最后的一位字符肯定是最后一个单词的最后一位
    while($start >= 0 && $s[$start] != ' '){//寻找最后一个单词的开头字符的位置
        $start--;
    }
    return $end - $start;
}
/**
 * 解法: 字符串遍历
 * 思路: 从字符串尾部进行反序遍历，主要有三种情况
 * 第一种情况：最后一个单词的后边都是空格，比如"Hello world "，此时需要把尾部的空格都过滤掉，进行第二种情况的操作
 * 第二种情况：当最后一个单词后边没有空格时，比如"Hello world"，此时把$end赋值给$start，一直遍历到，
 * 直到出现空格或者到字符串最开始，此时结果就是：$end - $start
 * 第三中情况：如果全部都是空格时，即$end < 0，返回0
 * 时间复杂度: O(n)
 * n是结尾为空格和最后一个单词的总长度
 * 空间复杂度: O(n)
 * n是结尾为空格和最后一个单词的总长度
 */
$s = "Hello world";
var_dump(lengthOfLastWord($s));