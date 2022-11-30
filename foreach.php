<?php
$sayılar=[0,1,2,3,4,5,6,7,8,9,10];

foreach($sayılar as $sayı){
    echo $sayı,"<br>";
}
$uyeDetay=[
    'name'=>"ayberk",
    'surname'=>"çatal",
    'age'=>19
];
foreach($uyeDetay as $key => $detay){
    echo $key," => ", $detay," <br>";
}
?>