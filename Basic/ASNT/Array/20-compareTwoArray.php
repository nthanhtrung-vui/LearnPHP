<?php 
    /** SO SÁNH KHÁC */
    $numbers1 = [1,2,3,4,5];
    $numbers2 = [2,4,5];

    // array_diff($array1, $array2) trả về một mảng bao gồm các phần tử có giá trị tồn tại trong mảng $array1 những không tồn tại trong mảng $array2
    $arrayDiff = array_diff($numbers1, $numbers2);
    echo '<pre>';
    print_r($arrayDiff);
    echo '</pre>';

    $courses1 = ["name"=>"JavaScrip", "time"=>100, "price"=>800, "student"=>10, "Sale"=>True];
    $courses2 = ["name"=>"PHP", "time"=>200, "price"=>1000];
    // array_diff_key($array1, $array2) trả về một mảng bao gồm các phần tử có khóa tồn tại trong mảng $array1 nhưng không tồn tại trong mảng $array2
    $arrayDiffKey = array_diff_key($courses1, $courses2);
    echo '<pre>';
    print_r($arrayDiffKey);
    echo '</pre>';

    $courses3 = ["name"=>"JavaScrip", "time"=>200, "price"=>8000, "student"=>10, "Sale"=>True];
    $courses4 = ["name"=>"PHP", "time"=>200, "price"=>1000];
    // array_diff_assoc($array1, $array2) trả về một mảng bao gồm các phần 
    $arrayDiffAssoc = array_diff_assoc($courses3, $courses4);
    echo '<pre>';
    print_r($arrayDiffAssoc);
    echo '</pre>';

    /** SO SÁNH GIỐNG */
    $courses5 = ["name"=>"Python", "Extension"=>"PHP", "time"=>200, "price"=>8000, "student"=>10, "Sale"=>True];
    $courses6 = ["name"=>"PHP","time"=>200, "price"=>1000];
    
    // array_intersect($array1, $array2) trả về một mảng bao gồm các phần tử giống nhau về giá trị giữa 2 mảng $array1, $array2
    $arrayIntersect = array_intersect($courses5, $courses6);
    echo '<pre>';
    print_r($arrayIntersect);
    echo '</pre>';


    // array_intersect_key($array1, $array2) trả về một mảng bao gồm các phần tử giống nhau về khóa giữa 2 mảng $array1, $array2
    $arrayIntersectKey = array_intersect_key($courses5, $courses6);
    echo '<pre>';
    print_r($arrayIntersectKey);
    echo '</pre>';


    // array_intersect_assoc($array1, $array2) trả về một mảng bao gồm các phần tử giống nhau về khóa và giá trị giữa 2 mảng $array1, $array2 
    $arrayIntersectAssoc = array_intersect_assoc($courses5, $courses6);
    echo '<pre>';
    print_r($arrayIntersectAssoc);
    echo '</pre>';
    