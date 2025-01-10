<?php 
    $str = "PHP is easy";

    // str_replace($find, $replace, $string) để thay thế giá trị $find trong chuỗi $string bằng giá trị $replace
    $str = str_replace("PHP","PHP1",$str);
    echo $str;

    // str_replace có thể thay tìm và thay thế giá trị trong mảng
    $arr = ["PHP", "Python", "Css", "JavaScript","C#"];
    $arr = str_replace("C#", "React",$arr);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
