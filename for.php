<?php
    for ($i=1; $i <= 10; $i++) { 
        if($i==5) continue;
        echo $i,"<br>";
        if($i==8) break;
    }

    for ($i=10; $i >=1 ; $i--):
        
        echo $i,"&nbsp";
       
    endfor;
    echo"<br>";
    $kimlik =[
        "ayberk",
        "catal",
        19,
        "ayberkctl.com"
    ];
    for ($i=0; $i < count($kimlik) ; $i++) { 
        echo $kimlik[$i]," ";
    }
    
?>