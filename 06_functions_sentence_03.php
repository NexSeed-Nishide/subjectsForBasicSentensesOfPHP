<?php


    // $a, $bとして引数を受け取り、それを足し算する関数を定義して下さい
    // また、$a, $bに引数が与えられなかった場合には、$a, $bにはデフォルト値で1が設定されるようにしてください
    function add ($a = 0, $b = 10) {
        $sum = $a + $b;
        return $sum;
    }

    // 上記定義した関数を利用し、任意の足し算を行い、結果を$result1という変数に結果を格納して下さい
    $result1 = add(5, 10);

    // 上記定義した関数を利用し、一方の引数にデフォルト値が使われるようにし、$result2という変数に結果を格納して下さい
    $result2 = add(15);

    // 上記の$result1, 2の変数を、それぞれvar_dumpで結果を確認できるようにしておいてください
    echo "<pre>";
    var_dump($result1);
    echo "</pre>";
    echo "<pre>";
    var_dump($result2);
    echo "</pre>";

?>
