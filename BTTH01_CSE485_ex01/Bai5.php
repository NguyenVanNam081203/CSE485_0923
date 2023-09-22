<?php
$a = ['a' => ['b' => 0,'c' => 1],'b' => ['e' => 2,'o' => ['b' => 3] ] ];
$giatri_3 = $a['b']['o']['b'];
// In giá trị trong phần tử
echo $giatri_3."<br>";
$giatri_1 = $a['a']['c'];
// In giá trị trong phần tử
echo $giatri_1."<br>";
// in ra giá trị var_dump
$giatri_a = $a['a'];
print_r($giatri_a);
?>

