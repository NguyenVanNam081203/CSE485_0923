<?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    // Tính giá trị trung bình của mảng
    $average = array_sum($numbers) / count($numbers);

    // In ra giá trị trung bình
    echo "Gía trị trung bình: " .  $average . '<br>';

    // Các số lớn hơn giá trị trung bình
    echo "Các số lớn hơn giá trị trung bình: ";
    foreach ($numbers as $key => $value){
        if ($value > $average){
            echo $numbers[$key] . " ";
        }
    }
    echo '<br>';
    // Các số nhỏ hơn hoặc bằng giá trị trung bình
    echo "Các số nhỏ hơn hoặc bằng giá trị trung bình: ";
    foreach ($numbers as $key => $value){
        if ($value <= $average){
            echo $numbers[$key] . " ";
        }
    }
?>