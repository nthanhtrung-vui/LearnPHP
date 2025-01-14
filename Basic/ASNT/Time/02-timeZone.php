<?php 
    // date_default_timezone_get() : trả về kết quả múi giờ đã được thiết lập sẵng 
    echo date_default_timezone_get().'<br>';

    // date_default_timezone_set() : thiết lập múi giờ
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $time = getdate();
    echo '<pre>';
    print_r($time);
    echo '</pre>';

    // timezone_identifiers_list() : xem danh sách các muối giờ
    $timeZones = timezone_identifiers_list();
    echo '<pre>';
    print_r($timeZones);
    echo '</pre>';
    