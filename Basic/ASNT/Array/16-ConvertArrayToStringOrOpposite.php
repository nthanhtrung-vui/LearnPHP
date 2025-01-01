<?php 
    $courses = ["Name"=>"PHP", "time"=>200, "price"=>10000];
    // serialize($value) chuyển đổi/mảng/chuỗi/đối tượng $value thành một chuỗi đặc biệt để lưu vào cơ sở dữ liệu
    $strDBCourses = serialize($courses);
    echo $strDBCourses.'<br>';

    // unserialize($value) chuyển chuỗi đặc biệt được tạo từ serialize($value) về trạng thái ban đầu
    $dataCourses = unserialize($strDBCourses);
    echo '<pre>';
    print_r($dataCourses);
    echo '</pre>';