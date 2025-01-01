<?php 
    $courses = ["name"=>"PHP", "time"=>200, "price"=>10000];
    $newCoures = array_change_key_case($courses, CASE_UPPER);
    echo '<pre>';
    print_r($newCoures);
    echo '</pre>';