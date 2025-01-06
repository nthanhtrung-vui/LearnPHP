<?php 
    // ltrim($str, $params) xóa các ký tự nằm bến trái chuỗi nào đó
    // tham số $params khi bằng rỗng sẽ xóa bỏ các kí tự sau:
    // "\0" - NULL
    // "\t" - tab
    // "\n" - new line
    // "\xOB" - vertical tab
    // "\r" - carriage return
    // " " - ordinary white space

    $str = "            php is easy";
    echo "input:".$str." len: ".strlen($str).'<br>';

    $str = ltrim($str);
    echo "input:".$str." len: ".strlen($str).'<br>';

    // rtrim($str, $params) xóa các ký tự nằm bến trái chuỗi nào đó
    // tham số $params khi bằng rỗng sẽ xóa bỏ các kí tự sau:
    // "\0" - NULL
    // "\t" - tab
    // "\n" - new line
    // "\xOB" - vertical tab
    // "\r" - carriage return
    // " " - ordinary white space

    $str2 = "rtrim          ";
    echo "input:".$str2." len: ".strlen($str2).'<br>';

    $str2 = rtrim($str2);
    echo "input:".$str2." len: ".strlen($str2).'<br>';

    // trim($str, $params) xóa các ký tự nằm bến trái chuỗi nào đó
    // tham số $params khi bằng rỗng sẽ xóa bỏ các kí tự sau:
    // "\0" - NULL
    // "\t" - tab
    // "\n" - new line
    // "\xOB" - vertical tab
    // "\r" - carriage return
    // " " - ordinary white space

    $str3 = "    trim          ";
    echo "input:".$str3." len: ".strlen($str3).'<br>';

    $str3 = rtrim($str3);
    echo "input:".$str3." len: ".strlen($str3).'<br>';