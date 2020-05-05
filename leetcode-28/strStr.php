<?php

/*
 * 题目:实现 strStr()
 * 实现 strStr() 函数。
 * 给定一个 haystack 字符串和一个 needle 字符串，在 haystack 字符串中找出 needle 字符串出现的第一个位置 (从0开始)。如果不存在，则返回  -1
 */
function newStrStr($haystack, $needle) {
    $i = -1;
    if (!$haystack && !$needle) {
        return 0;
    }
    if ($haystack && !$needle) {
        return 0;
    }
    $haystack_len = mb_strlen($haystack);
    $needle_len = mb_strlen($needle);
    for ($j = 0; $j < $haystack_len; $j++) {
        if ($haystack[j] == $needle[0]) {
            if (substr($haystack, $j, $needle_len) == $needle) {
                return $j;
            }
        }
    }
    return $i;
}

$haystack = '112132';
$needle = '3';

$res = newStrStr($haystack, $needle);
var_dump($res);