<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

// ここに処理を記述

$i = true;
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $num = false;
        break;
    }
}

if ($num) {
    echo $num . "は素数です。";
} else {
    echo $num . "は素数ではありません。";
}
