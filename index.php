<?php
function showIndex($arr, $x)
{
    if ($x > 0 && $x < 100) {
        echo "Gia tri cua phan tu co chi so " . $x . "la " . $arr[$x];
    } else {
        throw new Exception("Chỉ số vượt quá giới hạn của mảng");
    }
}

$arr = [];
for ($i = 0; $i < 100; $i++) {
    array_push($arr, rand(1, 100));
}
var_dump($arr);

try {
    showIndex($arr,10);
    echo "<br>".'If you see this, phan tu >0 va phan tu <100';
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}

