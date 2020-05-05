<?php

/*
 * 题目:删除排序数组中的重复项
 * 给定一个排序数组，你需要在 原地 删除重复出现的元素，使得每个元素只出现一次，返回移除后数组的新长度。
 * 不要使用额外的数组空间，你必须在 原地 修改输入数组 并在使用 O(1) 额外空间的条件下完成。
 */
function removeDuplicates(&$nums) {
    $i = 0;
    while ($i < count($nums) - 1) {
        if ($nums[$i] == $nums[$i+1]) {
            array_splice($nums, $i, 1);
            $i = 0;
            continue;
        }
        $i++;
    }
    return count($nums);
}

//方法二。受官方启发
function removeDuplicates2(&$nums) {
    $count = count($nums);
    if ($count == 0) return 0;
    $i = 0;
    for ($j = 1; $j < $count; $j++) {
        if ($nums[$j] != $nums[$i]) {
            $i++;
            $nums[$i] = $nums[$j];
        }
    }
    return $i + 1;
}

$nums = [0, 0, 1];
$len = removeDuplicates($nums);
var_dump($nums);