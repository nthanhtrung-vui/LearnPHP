<?php 
// array_walk($array, "myFunction") gửi các giá trị của mảng đến một hàm nào đó để xử lý và nhận kết quả trả về là môt mảng mới
function addValue(&$value, $number=2){
    $value =  $value + $number;
}

$numbers = [1,2,3,4,5,6];


array_walk($numbers, "addValue");

echo '<pre>';
print_r($numbers);
echo '</pre>';





