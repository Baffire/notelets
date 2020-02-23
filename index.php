<?php
session_start();

include "config/Autoload.php";

require_once ('config/Database.php');

if(!empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['theme'])){
	$notes = new controllers\Notelets($_POST['title'], $_POST['text'], $_POST['theme']);
	$notes->setNote();

	header('Location: public/thx/thx.php');
}

include('views/main/main.php');