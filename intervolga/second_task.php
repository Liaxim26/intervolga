<?php 

/* ////Задание 2/////

2. Веб-разработка
На диске лежит файл image.png, размер 20000 на 20000. Вывести картинку как баннер размером 200 на 100 пикселей.
Обратите внимание на размер и пропорции, и подумайте о времени загрузки.
Пришлите ссылку на репозиторий с решением
Важно: решение требует использования PHP, сжатие картинки средствами HTML/CSS является некорректным решением.
*/


$fileName = "img/test.png";
$newWidth = 200;
$newHeight = 100; 

header('Content-Type: image/png');

list($width, $height) = getimagesize($fileName);


$thumb = imagecreatetruecolor($newWidth, $newHeight);

$source = imagecreatefromjpeg($fileName);


imagecopyresized($thumb, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
imagejpeg($thumb);
imagedestroy($thumb);


?>
