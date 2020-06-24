<?php
/*Class generates link on notelet
================================*/
namespace controllers;

use config\Database;

class Links
{
	use Database;

	public $id;

	public function getId() //Method gets last id from DB
	{
		$query = "SELECT MAX(id) FROM notelets";
		$result = mysqli_query($this->connect(), $query);
		for($id = []; $row = mysqli_fetch_assoc($result); $id[] = $row);
		return $id[0];
	}

	public function getLink() //Method forms link on notelet
	{
		$server_addr_path = $_SERVER['HTTP_HOST'];
		$directory_path = $_SERVER['REQUEST_URI'];
		return $server_addr_path."/htdocs/domains/notelets/public/notelet/notelet.php"."/?id=".$this->id;
	}
}