<?php

/*
 * 题目: 合并两个有序链表
 * 将两个升序链表合并为一个新的升序链表并返回。新链表是通过拼接给定的两个链表的所有节点组成的。
 * 示例：输入：1->2->4, 1->3->4
 *      输出：1->1->2->3->4->4
 */
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val) {
        $this->val = $val;
    }
}

function mergeTwoLists($l1, $l2) {
    $l1arr = [];
    if ($l1->val !== null) {
        do {
            $l1arr[] = $l1->val;
            $l1 = $l1->next;
        } while($l1->next);
        if ($l1->val !== null) {
            $l1arr[] = $l1->val;
        }
    }

    $l2arr = [];
    if ($l2->val !== null) {
        do {
            $l2arr[] = $l2->val;
            $l2 = $l2->next;
        } while($l2->next);
        if ($l2->val !== null) {
            $l2arr[] = $l2->val;
        }
    }

    $count = count($l1arr) + count($l2arr);
    $data = [];

    while ($count) {
        if (count($l1arr) && count($l2arr)) {
            if ($l1arr[0] < $l2arr[0]) {
                $data[] = array_shift($l1arr);
            } elseif ($l1arr[0] == $l2arr[0]) {
                $data[] = array_shift($l1arr);
                $data[] = array_shift($l2arr);
            } else {
                $data[] = array_shift($l2arr);
            }
        } else {
            if (count($l1arr)) {
                $data = array_merge($data, $l1arr);
                break;
            }
            if (count($l2arr)) {
                $data = array_merge($data, $l2arr);
                break;
            }
        }
        --$count;
    }

    $node = new ListNode(array_shift($data));
    $current = null;
    foreach ($data as $k => $v) {
        $temp = new ListNode($v);
        if ($k == 0) {
            $node->next = $temp;
        } else {
            $current->next = $temp;
        }
        $current = $temp;
    }
    return $node;
}

$l1 = [];
$current = null;
$l1Node = new ListNode(array_shift($l1));
foreach ($l1 as $k => $v) {
    $temp = new ListNode($v);
    if ($k == 0) {
        $l1Node->next = $temp;
    } else {
        $current->next = $temp;
    }
    $current = $temp;
}

$l2 = [1];
$current = null;
$l2Node = new ListNode(array_shift($l2));
foreach ($l2 as $k => $v) {
    $temp = new ListNode($v);
    if ($k == 0) {
        $l2Node->next = $temp;
    } else {
        $current->next = $temp;
    }
    $current = $temp;
}

$res = mergeTwoLists($l1Node, $l2Node);
var_dump($res);
