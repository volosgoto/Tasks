<?php
$arr = [-4, -2, -10, 5];

// Array max elements
function minArr($arr) {
    $len = count($arr);
    $max = $arr[0];

    for ($i = 0; $i < $len; $i++) {
        if ($max < $arr[$i]) {
            $max = $arr[$i];
        }
    }
    return $max;
}
print_r(minArr($arr));