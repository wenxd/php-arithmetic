<?php

/*
 * 题目:搜索插入位置
 * 给定一个排序数组和一个目标值，在数组中找到目标值，并返回其索引。如果目标值不存在于数组中，返回它将会被按顺序插入的位置。
 * 你可以假设数组中无重复元素。
 */
function searchInsert($nums, $target) {
    $count = count($nums);
    if (!$count) return 0;
    $index = 0;
    foreach ($nums as $key => $v) {
        if ($v == $target) {
            $index = $key;//返回对应值的下标
            break;
        }
        if ($v < $target) {
            $index++;
        }
    }
    return $index;
}

$nums = [1,3,5,6];
$target = 6;

$res = searchInsert($nums, $target);
var_dump($res);