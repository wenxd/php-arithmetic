<?php

/*
 * 题目:外观数列
 *「外观数列」是一个整数序列，从数字 1 开始，序列中的每一项都是对前一项的描述。前五项如下
 * 1.     1
 * 2.     11
 * 3.     21
 * 4.     1211
 * 5.     111221
 * 1 被读作  "one 1"  ("一个一") , 即 11。
 * 11 被读作 "two 1s" ("两个一"）, 即 21。
 * 21 被读作 "one 2",  "one 1" （"一个二" ,  "一个一") , 即 1211。
 * 给定一个正整数 n（1 ≤ n ≤ 30），输出外观数列的第 n 项。
 * 注意：整数序列中的每一项将表示为一个字符串。
 */
function countAndSay($n) {
    $str = '';

    for ($i = 1; $i <= $n; $i++) {
        if ($i == 1) {
            $str = '1';
        } else {
            $new_arr = [];
            $new_str = '';
            for ($j = 0; $j <= strlen($str); $j++) {
                if (empty($new_arr)) {
                    $new_arr[] = $str[$j];
                } else {
                    if (isset($str[$j]) && $str[$j] == end($new_arr)) {
                        $new_arr[] = $str[$j];
                    } else {
                        if ($j !== strlen($str)) {
                            $j--;
                        }
                        $new_str .= count($new_arr) . $new_arr[0];
                        $new_arr = [];
                    }
                }
            }
            $str = $new_str;
        }
        if ($n == $i) {
            return $str;
        }
    }

    return $str;
}

$n = 6;
$res = countAndSay($n);
var_dump($res);
