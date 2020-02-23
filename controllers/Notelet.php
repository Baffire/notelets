<?php
/*Данный класс осуществляет вывод записок из базы
================================*/
namespace controllers;

use config\Database;

class Notelet
{
	use Database;

	public function getNote($id) //Метод получает из базы записку
	{
		$query = "SELECT * FROM notelets WHERE id='$id'";
		$result = mysqli_query($this->connect(), $query);
		for($note = []; $row = mysqli_fetch_assoc($result); $note[] = $row);
		return $note;
	}
}