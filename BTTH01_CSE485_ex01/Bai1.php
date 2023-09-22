<?php
function tinh_tong_tich_hieu_thuong($arrs)
{
    $tong = array_sum($arrs);
    $tich = array_product($arrs);
    $hieu = $arrs[0];
    $thuong = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $hieu -= $arrs[$i]; 
        $thuong /= $arrs[$i];
    }
    echo "Tổng các phần tử = <b>$tong<b>";
    echo "<br>";
    echo "Tích các phần tử = <b>$tich<b>";
    echo "<br>";
    echo "Hiệu các phần tử = <b>$hieu<b>";
    echo "<br>";
    echo "Thương các phần tử = <b>$thuong<b>";
    echo "<br>";
}
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
tinh_tong_tich_hieu_thuong($arrs);
?>