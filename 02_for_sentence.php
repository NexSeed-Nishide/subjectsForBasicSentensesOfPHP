<?php

    // ループさせる配列を作って下さい。中身は数値で1, 2, 3, 4, 5でOKです。
    $array = array(1, 2, 3, 4, 5);

    // for文でループさせて、順番にデータを出力して下さい。
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i];
        echo "<br />";
    }
?>
