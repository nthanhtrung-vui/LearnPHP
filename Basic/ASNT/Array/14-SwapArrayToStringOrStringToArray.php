<?php 
    $courses = ["name"=>"PHP", "time"=>200, "price"=>1000];
    // implode($str, $array) chuyển các giá trị của mảng $array thành một chuỗi bao gồm các phần tử cách nhau bởi kí tự cách nhau bỏ kí tự $str
    $strCourses = implode("-",$courses);
    echo '<pre>';
    print_r($strCourses);
    echo '</pre>';

    // explode($delimiter, $str) chuyển một chuỗi thành một mảng , Tách chuỗi dựa vào $delimiter, mỗi đoạn tách ra sẽ thành một phần tử của mảng mới
    $arrCoures = explode("-", $strCourses);
    echo '<pre>';
    print_r($arrCoures);
    echo '</pre>';