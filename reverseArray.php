<?php
$arr = [1,2,3,4,5];

// Array max elements
function reverseArray($arr) {
    $len = count($arr) -1 ;
    $rev= [];

    for($i = $len; $i >= 0; $i--) {
        $rev[] = $arr[$i];

    }
    return $rev;

}

print_r(reverseArray($arr));