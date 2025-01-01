<?php 
    $key = ["name", "time", "price"];
    $value = ["PHP", 100, 10000];

    // array_combine($key, $value) tạo một mảng mới có khóa được lấy từ mảng $key và giá trị được lấy từ mảng $value
    $courses = array_combine($key, $value);
    echo '<pre>';
    print_r($courses);
    echo '</pre>';