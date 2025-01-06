<?php 

    $str = "Hello";

    $str2 = "Xin chào trung";

    // strlen($str) lấy chiều dài của chuổi $str
    echo strlen($str).'<br>';

    // mb_strlen($str) lấy chiều dài của chuỗi chứ kí tự UTF-8
    echo mb_strlen($str2, "UTF-8");