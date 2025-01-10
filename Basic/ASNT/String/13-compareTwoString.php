<?php 

    $str1 = "Hello world";
    $str2 = "Hello world 2, 24h";

    // strcmp($str1, $str2) so sánh hai chuỗi $str1 và $str2 với nhau trả về số lượng ký tự khác nhau (-)
    $compare = strcmp($str1, $str2);
    echo $compare.'<br>';

    // substr_compare($str1, $str2, $start, $length) lấy $length phần tử từ vị trí $start trong chuỗi $str1 sau đó so sánh với chuỗi $str2
    $compare2 = substr_compare($str1, $str2, 0, 5);
    echo $compare2;