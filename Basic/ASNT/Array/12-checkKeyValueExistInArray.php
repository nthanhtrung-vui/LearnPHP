<?php 
    $courses = ["Name"=>"PHP", "time"=>200, "courses"=>4500];

    // array_key_exists($key, $array) kiểm tra khóa $key có tồn tại trong mảng $array hay không? nếu có trả về giá trị true.
    $checkKey = array_key_exists("time", $courses);
    if($checkKey){
        echo "Key is exist".'<br>';
    }else{
        echo "Key is not exist".'<br>';
    }

    // in_array($value, $array) kiểm tra giá trị $value có tồn tại trong mảng $array hay không? nếu có trả về giá trị true. 
    $checkValue = in_array("PHP", $courses);
    if($checkValue){
        echo "Value is exist".'<br>';
    }else{
        echo "Value is not exist".'<br>';
    }

