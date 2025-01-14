<?php 
/**
 *  Ký hiệu     Đại diện    Giá trị
 *  d           Day         01->31
 *  j           Day         1->31
 *  m           Month       01->12
 *  n           Month       1->12
 *  M           Month       Jan, Feb...
 *  Y           Year        2013
 *  y           Year        13
 *  g           Hour        1->12
 *  G           Hour        0->23
 *  h           Hour        01->12
 *  H           Hour        01->23
 *  i           Minute      0->59
 *  s           second      00->59
 *  a           Am / pm     am pm
 *  A           Am / pm     AM PM
 */

// date($format, $time): hiển thị thời dang theo $time định dạng theo $format
date_default_timezone_set("Asia/Ho_Chi_Minh");
$time = time();
echo date("d/m/Y g : i A", $time);