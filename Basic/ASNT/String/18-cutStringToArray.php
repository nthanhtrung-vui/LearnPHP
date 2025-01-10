<?php 
    //str_split($str, $length) cắt chuỗi thành từng phần tử trong mảng, mỗi phần tử có độ dài là $length ký tự
    $str = "PHp is easy";
    $arrStr = str_split($str,2);
    echo '<pre>';
    print_r($arrStr);
    echo '</pre>';