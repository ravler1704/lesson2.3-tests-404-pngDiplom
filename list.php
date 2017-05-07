<?php
Error_reporting(E_ALL);
echo "<h1>Загруженные тесты:</h1>";
echo '<br />';
echo '<br />';
$dir    = 'uploads';
$files = scandir($dir, 1);
echo '<br />';
for ($i=0; $i<count($files)-2; $i++) {
	echo $files[$i].' (Тест №  '.$i.')<a href="test.php?numTest=' . $i . '">Выбрать тест</a><br />';
	}
echo '<br />';
echo '<br />';
echo '<br />';
echo "<a href='admin.php'>Загрузить тест</a>";
?>