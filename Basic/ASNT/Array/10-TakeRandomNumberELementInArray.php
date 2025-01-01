<?php 
    // array_rand($array, $number) lấy ngẫu nhiên $number phần tử từ mảng $array và đưa vào mảng mới (lấy giá trị khóa);

    $dataCourses = ["Name"=>"PHP", "Time"=>200, "Price"=>1000, "Student"=>50, "Teacher"=>2];

    $randomKeyCourses = array_rand($dataCourses, 3);
    echo '<pre>';
    print_r($randomKeyCourses);
    echo '</pre>';