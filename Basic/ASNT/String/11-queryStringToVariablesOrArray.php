<?php 
    $query = "name=trung&age=30";

    // parse_str() chuyển các nội dung truy vấn vào các biến hoặc mảng
    parse_str($query, $result);
    echo '<pre>';
    print_r($result);
    echo '</pre>';
