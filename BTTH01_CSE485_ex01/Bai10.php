<?php
    $arrs1 = ['a', 'b', 'c', 'd'];
    $arrs2 = ['a', 0, null, false];
        // Chuyển đổi các mảng $arrs thành chữ hoa
    $arrs1 = array_map('strtoupper', $arrs1);
    $arrs2 = array_map('strtoupper', $arrs2);

     // In ra kết quả
     print_r($arrs1);
     echo '<br>';
     print_r($arrs2);
?>