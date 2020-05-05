<?php

/*
 * 题目:移除元素
 * 给你一个数组 nums 和一个值 val，你需要 原地 移除所有数值等于 val 的元素，并返回移除后数组的新长度。
 * 不要使用额外的数组空间，你必须仅使用 O(1) 额外空间并 原地 修改输入数组。
 * 元素的顺序可以改变。你不需要考虑数组中超出新长度后面的元素。
 */
function removeElement(&$nums, $val) {
    $count = count($nums);
    if (!$count) return 0;

    for ($j = 0; $j < $count; $j++) {
        if ($nums[$j] == $val) {
            unset($nums[$j]);
        }
    }
    $nums = array_values($nums);
    return count($nums);
}

$nums = [0,1,2,2,3,0,4,2];
$val = 2;

$len = removeElement($nums, $val);

var_dump($len);
var_dump($nums);