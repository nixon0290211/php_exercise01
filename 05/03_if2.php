<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

// ここに処理を記述
echo '私は、'.PHP_EOL;
foreach ($foods as $key => $Value) {
    echo"{$key}に{$Value} ". PHP_EOL; 
};
echo "食べます";
