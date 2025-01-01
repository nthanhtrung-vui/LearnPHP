<?php 
    $numbers = [1,4,6,12,9,33,5,10,22,7,35];
    // array_search($value, $array) tìm phần tử mang giá trị $value trong mảng  $array. Trả về khóa của phần tử tìm được
    $searchNumber = array_search(5, $numbers);
    echo $searchNumber;
