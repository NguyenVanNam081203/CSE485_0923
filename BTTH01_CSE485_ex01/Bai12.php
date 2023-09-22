<?php
    $numbers = [
        'key1' => 12, 
        'key2' => 30, 
        'key3' => 4, 
        'key4' => -123, 
        'key5' => 1234, 
        'key6' => -12565, 
       ];
    // Lấy giá trị đầu tiên của mảng
    echo "Giá trị đầu tiên của mảng: ";
    print_r(reset($numbers));
    echo '<br>';

    // trả về giá trị cuối cùng của mảng
    echo"Giá trị cuối cùng của mảng: ";
    print_r(end($numbers));
    echo '<br>';

    // tìm số lớn nhất 
    echo "Số lớn nhất : ";
    print_r(max($numbers));
    echo '<br>';

    // tìm số nhỏ nhất
    echo "Số nhỏ nhất : ";
    print_r(min($numbers));
    echo '<br>';
    
    // tổng các giá trị từ mảng;
    echo "Tổng giá trị của mảng: ";
    echo $tong = array_sum($numbers) . '<br>';
    
    // mảng theo chiều tăng dần
    echo "Mảng theo chiều tăng dần: ";
    asort($numbers); 
    print_r($numbers);
    echo '<br>';

    // mảng theo chiều giảm dần
    echo"Mảng theo chiều giảm dần: ";
    arsort($numbers);
    print_r($numbers);
    echo '<br>';

    // sắp xếp mảng theo chiều tăng 
    echo "Sắp xếp mảng theo chiều tăng: ";
    // Sắp xếp mảng theo chiều tăng các key
    ksort($numbers);

    // In ra mảng sau khi sắp xếp
    print_r($numbers);
    echo '<br>';

    // sắp xếp mảng theo giảm các key
    echo "Sắp xếp mảng theo giảm tăng: ";
    krsort($numbers);
    // In ra mảng sau khi sắp xếp
    print_r($numbers);  
?>