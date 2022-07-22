<?php

echo '$pointの値を入力して下さい: ';
$point = trim(fgets(STDIN));

// ここに処理を記述
if ($x % 2 == 0) {
    echo 'xは偶数です';
} elseif ($x % 2 == 1) {
    echo 'xは奇数です';
}
