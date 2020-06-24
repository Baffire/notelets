<?php
/*Class get notelets from DB
================================*/
namespace controllers;

use config\Database;

class Notelet
{
	use Database;

	public function getNote($id) //Get one notelet
	{
		$query = "SELECT * FROM notelets WHERE id='$id'";
		$result = mysqli_query($this->connect(), $query);
		for($note = []; $row = mysqli_fetch_assoc($result); $note[] = $row);
		return $note;
	}
}