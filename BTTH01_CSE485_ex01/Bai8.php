<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    //Hàm array_map trong PHP có tác dụng duyệt qua từng phần tử của một mảng và áp dụng một hàm cho từng phần tử đó. Hàm này trả về một mảng mới với các phần tử được áp dụng hàm đã chỉ định.
    $array_mang = array_map('strlen', $array);  
    $max = max($array_mang);
    $min = min($array_mang);
    // cach 1:
    for($i = 0 ; $i < count($array); $i++){
        if (strlen($array[$i]) == $max){
            echo "Chuỗi lớn nhất là $array[$i], độ dài = " . $max; 
        }
    }
    echo '<br>';
    for($i = 0 ; $i < count($array); $i++){
        if (strlen($array[$i]) == $min){
            echo "Chuỗi nhỏ nhất là  $array[$i] , độ dài = " . $min;
        }
    }
    // khác nhau for và foreach : nếu cần lặp lại một khối lệnh 10 lần, thì nên sử dụng vòng lặp for.
    // Còn nếu cần lặp lại một khối lệnh cho từng phần tử của một mảng, thì nên sử dụng vòng lặp foreach
    
    
    // cách 2:
    //Dùng vòng foreach để duyệt qua từng phần tử của mảng $array
    // foreach ($array as $value) {
    //     if (strlen($value) == $max) {
    //         echo "Chuỗi lớn nhất là $value : , độ dài = " . $max; 
    //     }
    // }
    // echo '<br>';

    // foreach ($array as $value) {
    //     if (strlen($value) == $min) {
    //         echo "Chuỗi nhỏ nhất là  $value , độ dài = " . $min;
    //     }
    // }
    // echo '<br>';
?>