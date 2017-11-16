<?php
$arr = [-4, -2, -10, 5];

// Array max elements
function minArr($arr) {
    $len = count($arr);
    $min = $arr[0];

    for($i = 0; $i < $len; $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}
print_r(minArr($arr));
