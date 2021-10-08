<?php 

/* ////Задание 1/////

1. PHP и HTML. Напишите код на PHP
В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости.
Нужно в переменную $b записать сокращенный текст новости по правилам:
- обрезать до 180 символов
- приписать многоточие
- последние 2 слова и многоточие сделать ссылкой на полный текст новости.
Какие проблемы вы видите в решении этой задачи? Что может пойти не так?
Результат: ссылка на репозиторий с кодом и ваши комментарии.
*/


$a = 'Что такое Lorem Ipsum? Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.';


$link = 'https://ru.lipsum.com/'; // Full text
$b = '';  // Abbreviated text
 
$text = mb_substr($a,0,180); // Original 180 characters


//Find the last two words
$arrayText = explode(' ' , $text);
$maxSize = count($arrayText);

$lastTwoWords = $arrayText[$maxSize-2] . ' ' . $arrayText[$maxSize-1] . '...';


//Сounting the characters of the last two words
for ($i = $maxSize-2; $i < $maxSize; $i++)
  $characters += mb_strlen($arrayText[$i]);

//180 characters without the last two words
$characters = 179 - $characters;   
$textWithoutTwoWords = mb_substr($a,0,$characters);


$linkLastTwoWords = '<a href="'. $link .'">'. $lastTwoWords .'</a>';

//Output text result
$b = $textWithoutTwoWords . $linkLastTwoWords;

echo $b;

 ?>
