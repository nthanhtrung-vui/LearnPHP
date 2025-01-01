<?php 
    $courses = ["name"=>"PHP", "Price"=>2000, "time"=>200];

    // array_values($array) trả về một mảng liên tục có các phần tử có giá trị là giá trị lấy từ các phần tử của mảng $array.
    $arrValue = array_values($courses);
    echo '<pre>';
    print_r($arrValue);
    echo '</pre>';

    // array_keys($array) trả về một mảng liên tục có các phần tử có giá trị là giá trị lấy từ các phần tử của mảng $array.
    $arrKey = array_keys($courses);
    echo '<pre>';
    print_r($arrKey);
    echo '</pre>';

