<?php
$arr = [5, 1, 3, 2, 4, 100];
//$arr = 'abcde';

// Array elements sum
function sumArr($arr) {
    $len = count($arr);
    $sumArr = 0;

    if (is_array($arr)) {
        for ($i = 0; $i < $len; $i++) {
            $sumArr += $arr[$i];
        }
        return $sumArr;
    } else {
        return 0;
    }

// Using foreach
    /*
        foreach ($arr as $key => $value){
            $sumArr += $value;

        }
        return $sumArr;
      */
}

print_r(sumArr($arr));