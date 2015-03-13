<?php

    // 連想配列を作成します
    $array = array(
        "first" => "hogehoge",
        "second" => "fugafuga",
        "third" => "mogemoge"
    );

    // foreach文を使って、key, valueをそれぞれ毎回echoするような制御構文を書いて下さい
    foreach ($array as $key => $val) {
        echo $key;
        echo ": ";
        echo $val;
        echo "<br />";
    }
?>
