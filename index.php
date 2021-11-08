<?php

define('DEBUG', true);


require "functions.php";


$a = require 'text.php';
dbg("Оригинальный текст", $a);

$link = "https://some.domain/and/uri";
dbg("Ссылка на статью", $link);

$b = mb_strimwidth($a, 0, 180, "...");
dbg("Обрезанный текст", $b);



dbg("Вычленение слов", wordsFinder($b, 2));

dbg("Линковка слов", linkWords($b, 2, $link));

?>