<?php

     // 1 + 1 をしてその結果を返す関数を定義してください
    function onePlusOne () {
        $sum = 1 + 1;
        return $sum;
    }

    // 1 + 1 をする関数を呼んで(コールして)、その結果を$resultという変数に格納してください
    $result = onePlusOne();

    // $resultの結果をvar_dumpで出力しておいてください
    var_dump($result);

?>
