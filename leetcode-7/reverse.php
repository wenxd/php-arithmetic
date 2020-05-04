<?php

/*
 * 题目:整数反转
 * 给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。
 * 假设我们的环境只能存储得下 32 位的有符号整数，则其数值范围为 [−231,  231 − 1]。请根据这个假设，如果反转后整数溢出那么就返回 0。
 */
function reverse($x) {
    if ($x >= 0) {
        if (strrev($x) > (pow(2, 31) - 1)) {
            return 0;
        }
        return (int)(strrev($x));
    } else {
        if (strrev(abs($x)) > pow(2, 31)) {
            return 0;
        }
        return  '-' . (int)(strrev(abs($x)));
    }
}