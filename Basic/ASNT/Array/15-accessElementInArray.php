<?php 
    $numbers = [1,2,3,4,5,6,7,8];

    // current($array) truy xuất phần tử hiện tại của mảng
    $current = current($numbers);
    echo "Current: ".$current.'<br>';

    // next($array) truy xuất phần tử sau phần tử hiện tại của mảng
    $next = next($numbers);
    echo "Next: ".$next.'<br>';

    // prev($array) truy xuất phần tử trước phần tử hiện tại của mảng
    $prev = prev($numbers); 
    echo "Prev: ".$prev.'<br>';

    // end($array) truy xuất phần tử cuối cùng của mảng
    $end = end($numbers);
    echo "End: ".$end.'<br>';

    // reset() quay về vị trí phần tử đầu tiên trong mảng
    $reset = reset($numbers);
    echo "Reset".$reset.'<br>';
