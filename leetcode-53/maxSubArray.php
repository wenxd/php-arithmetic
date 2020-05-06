<?php

/*
 * 题目:最大子序和
 * 给定一个整数数组 nums ，找到一个具有最大和的连续子数组（子数组最少包含一个元素），返回其最大和。
 * 示例:
 * 输入: [-2,1,-3,4,-1,2,1,-5,4],
 * 输出: 6
 * 解释: 连续子数组 [4,-1,2,1] 的和最大，为 6。
 */
//贪心算法
function maxSubArray($nums) {
    $count  = count($nums);
    $max = $cur_max = $nums[0];
    for ($i = 1; $i < $count; $i++) {
        $cur_max = max($nums[$i], $nums[$i] + $cur_max);
        $max = max($cur_max, $max);
    }
    return $max;
}

//动态规划
function maxSubArray2($nums) {
    $count  = count($nums);
    for ($i = 1; $i < $count; $i++) {
        if ($nums[$i-1] > 0) {
            $nums[$i] = $nums[$i-1] + $nums[$i];
        }
    }
    return max($nums);
}

$nums = [-2,0,3,4,-1,2,-1,-5,4];

$res = maxSubArray2($nums);

var_dump($res);