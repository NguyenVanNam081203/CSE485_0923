<?php
    $keys = array(
        "field1"=>"first",
        "field2"=>"second",
        "field3"=>"third"
       );
       $values = array(
        "field1value"=>"dinosaur",
        "field2value"=>"pig",
        "field3value"=>"platypus"
       );
       //Hàm array_combine() trong PHP có tác dụng tạo một mảng mới từ hai mảng khác nhau
       $keysAndValues = array_combine($keys, $values);

       // Xuất ra mảng mới
       print_r($keysAndValues);
       
?>