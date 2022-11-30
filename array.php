<?php
$kimlik = array(
      "ad"=>  "ayberk ",
      "soyad"=> "catal",
      "meslek"=> "geliştirici",
      "yaş"=> 19
    );

    echo $kimlik["ad"];
    print_r($kimlik);

    $sayılar=array(1,2,3,4);
    $sayılar2=[1,2,3,4];
$katagoriler=[
    'siteler'=>[
        'e-ticaret'=>[
            'sahibinden',
            'n11',
            'hepsiburada',
            'gitigidiyor'
        ],

        'egitim'=>[
            'udemy',
            'youtube',
            'w3s'
        ]
    ]
        ];
        echo "<br>";
    print_r($katagoriler);
    echo $katagoriler["siteler"]["e-ticaret"][2],"<br>";

    define('UYE',[
        'ad'=>'ayberk',
        'soyad'=>'catal',
        'meslek'=>'geliştirci',
        'yaş'=>19,
        'hobileri' =>[
            'plays video games',
            'reads comics',
            'waches tv serises'
        ]
    ]);
    print_r(UYE);
    echo UYE["soyad"];
    

  
?>