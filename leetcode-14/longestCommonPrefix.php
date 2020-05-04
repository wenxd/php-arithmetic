<?php

/*
 * 题目:最长公共前缀
 * 编写一个函数来查找字符串数组中的最长公共前缀。
 * 如果不存在公共前缀，返回空字符串 ""。
 */
function longestCommonPrefix($strs) {
    $strs = array_unique($strs);
    if (empty($strs)) {
        return "";
    }
    if (count($strs) == 1) {
        return $strs[0];
    }
    $maxLength = 0;
    $maxText = "";

    foreach ($strs as $key => $value) {
        if (!$value) {
            return "";
        } else {
            $first = $value[0];
        }
        if (strlen($value) > $maxLength) {
            $maxLength = strlen($value);
            $maxText = $value;
        }
    }

    $isOver = true;
    $total  = 0;
    $num = count($strs);
    $i = 1;

    while ($isOver) {
        foreach ($strs as $key => $value) {
            if (stripos($value, $first) === 0) {
                $total++;
            }
        }
        //从第一个字符对比，如果相同就继续下一个字符
        if ($num == $total) {
            $first = substr($maxText, 0, $i += 1);
            $total = 0;
        } else {
            $isOver = false;
            $first = substr($maxText, 0, $i -= 1);
        }
    }

    return $first;
}