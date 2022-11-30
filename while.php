<?php

    //while(KOŞUL TRUE){  }
    $i=0;
    while ($i < 10) {
        echo $i," <br>";
        $i++;
    }
    while ($i < 31):
        echo $i," ";
        $i+=2;
    endwhile;
?>