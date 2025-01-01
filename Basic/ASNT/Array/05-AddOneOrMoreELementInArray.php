<?php 
    $numbers = [4,5,6,7];

    // array_push($array, $val1, $val2, ..., $valn) thêm một hoặc nhiều phần tử vào cuối mảng $array. Hàm trả về kiểu số nguyên là số lượng phần tử của mảng $array sau khi thêm vào 
    $addEndEle = array_push($numbers, 8,9,10);
    echo "End Ele: ".$addEndEle.'<br>';
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';

    // array_unshift($array, $val1, $val2, ..., $valN) thêm một hoặc nhiều phần tử vào đầu mảng $array. Hàm trả về kiểu số nguyên là số lượng phần tử của mảng $array sau khi thêm vào
    $addHeadEle = array_unshift($numbers, 1,2,3);
    echo "Head Ele: ".$addHeadEle.'<br>';
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';

