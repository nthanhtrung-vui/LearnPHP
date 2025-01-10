
<?php 
    $str = "This is a test";
    // substr_count($string, $substring, $start, $length) lấy $length phần tử từ vị trí $start trong chuỗi $str 
    // và thống kê số lần xuất hiện của $substring trong chuỗi vừa lấy trên
    $countIs = substr_count($str,"is",0,strlen($str));
    echo $countIs;