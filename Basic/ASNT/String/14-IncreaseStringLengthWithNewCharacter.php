<?php 
    // str_pad($str, $length, $padString, $padType) tăng độ dài của chuỗi $str thành $length với các ký tự mới được thêm vào là $padString cơ chế thêm là $padType
    $str = "PHP is easy";
    $str = str_pad($str,20,".",STR_PAD_RIGHT);
    echo $str;