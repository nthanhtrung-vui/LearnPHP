<?php 
// array_slice($array, offset, length, preserve) trích xuất lấy một đoạn phần tử của mảng từ vị trí bắt đầu offset (vị trí bắt đầu trong mảng là 0) và lấy length phần tử

$numbers = [1,2,3,4,5,6,7,8,9,10];
$slice = array_slice($numbers, 2, 3);
echo '<pre>';
print_r($slice);
echo '</pre>';
