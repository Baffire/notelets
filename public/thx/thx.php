<?php
include "../../config/Autoload.php";

$link = new controllers\Links();

foreach($link->getId() as $id){
	$last_id = $id;
}

$link->id = $last_id;

include('../../views/thx/thx.php');