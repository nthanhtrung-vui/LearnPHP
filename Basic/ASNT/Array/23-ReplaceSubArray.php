<?php
// array_splice($array1, $offset, $length, $array2) xóa bỏ một đoạn phần tử của mảng $array1 từ vị trí $offset và lấy $length phần tử. Sau đó thay thế các phần tử bị lọai bỏ bằng mảng $array2
// (lưu ý sẽ thay đổi mảng gốc)
$numbers1 = [1,2,3,4,5,6,7];
$numbers2 = [8,9,10,11,12,13];

$numbers = array_splice($numbers1, 3, 3, $numbers2);
echo '<pre>';
print_r($numbers1);
echo '</pre>';
