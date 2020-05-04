<?php

/*
 * 题目:有效的括号
 * 给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串，判断字符串是否有效。
 * 有效字符串需满足：
 * 左括号必须用相同类型的右括号闭合。
 * 左括号必须以正确的顺序闭合。
 * 注意空字符串可被认为是有效字符串。
 */
function isValid($s) {
    $strArr = str_split($s);
    $before = [
        '(' => ')',
        '{' => '}',
        '[' => ']',
    ];

    $after = [
        ')' => '(',
        '}' => '{',
        ']' => '[',
    ];

    $arrs = [];

    foreach ($strArr as $key => $value) {
        if (isset($before[$value])) {
            $arrs[] = $value;
        }

        if (isset($after[$value])) {
            if (end($arrs) == $after[$value]) {
                array_pop($arrs);
            } else {
                $arrs[] = $value;
            }
        }
    }

    return $arrs ? false : true;
}