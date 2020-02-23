<?php
include "../../config/Autoload.php";

if(isset($_GET['id']) && !empty($_GET['id'])){

	$id = $_GET['id'];

	$notelet = new controllers\Notelet();
	$max_id = new controllers\Links();

	foreach($max_id->getId() as $max){
		$last_id = $max;
	}

	if($id <= $last_id ){
		foreach($notelet->getNote($id) as $item){
			$title = $item['title'];
			$text = $item['text'];
			$theme = $item['theme'];
		}

		if($theme == 1) {
			$theme_note = "happy_birthday";
		}

		if($theme == 2) {
			$theme_note = "new_year";
		}

		if($theme == 3) {
			$theme_note = "valentines_day";
		}

		if($theme == 4) {
			$theme_note = "merry_christmas";
		}

		if($theme == 5) {
			$theme_note = "halloween";
		}

		include('../../views/notelet/notelet.php');
	}else{
		include('../../views/404/404.php');
	}

}else{
	include('../../views/404/404.php');
}


