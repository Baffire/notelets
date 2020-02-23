<?php
/*Функция автозагрузки файлов
 =============================*/

spl_autoload_register(function($class){
	$ds = DIRECTORY_SEPARATOR;
	$filename = $_SERVER['DOCUMENT_ROOT']."\\domains\\notelets\\".$ds.str_replace('\\', $ds, $class).'.php';
	require($filename);
});