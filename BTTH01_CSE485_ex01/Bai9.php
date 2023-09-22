<?php
    $arrs1 = ['a', 'b', 'ABC'];
    $arrs2 = ['1', 'B', 'C', 'E'];
    $arrs3 = ['a', 0, null, false];
    // Chuyển đổi các mảng $arrs thành chữ thường
    $arrs1 = array_map('strtolower', $arrs1);
    $arrs2 = array_map('strtolower', $arrs2);
    $arrs3 = array_map('strtolower', $arrs3);
    
    // In ra kết quả
    print_r($arrs1);
    echo '<br>';
    print_r($arrs2);
    echo '<br>';
    print_r($arrs3)
?>