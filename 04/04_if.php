<?php

echo '$score_mathの値を入力して下さい: ';
$score_math = trim(fgets(STDIN));

echo '$score_englishの値を入力して下さい: ';
$score_english = trim(fgets(STDIN));

// ここに処理を記述
if ($score_math >= 80 && $score_english >= 80) {
    echo '合格です<br>';
} elseif($score_math >= 50 || $score_english >= 50){
    echo '再試験です<br>';
}else{
    echo'不合格';
}
// } elseif($score_math > 50 || $score_english > 50){
//     echo '不合格です';
// }else{
//     echo' ';
// }
