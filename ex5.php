<?php


    echo "<B> array() 함수를 사용한 총점과 평균 </B> <br>";

    echo "------------------------------------------<br>";

    $score = array(array(90,96,95), array(88,66,75));

    for($a = 0; $a <= 1; $a++){

        $sum = 0;
        $num = $a+1;

        echo "<B> ($num) 번째학생 </B> <br>";
        for($b = 0; $b <= 2; $b++){
            $mok = $b + 1;
            echo "<B> ($mok)의 점수</B> : {$score[$a][$b]} <br>";
        }
    } 
?>