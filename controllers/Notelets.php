<?php
/*Class write notelet in DB
================================*/
namespace controllers;

use config\Database;

class Notelets
{
	use Database;

	public $title;
	public $text;
	public $theme;
	private $link;

	public function __construct($title, $text, $theme)
	{
		$this->link = $this->connect();

		$this->title = $this->controlData($title);
		$this->text = $this->controlData($text);
		$this->theme = $this->controlData($theme);
	}

	public function setNote() //Method write notelet and return id
	{
		$query = "INSERT INTO notelets SET title='$this->title', text='$this->text', theme='$this->theme'";
		mysqli_query($this->connect(), $query);
	}

	private function controlData($data)
	{
		return trim(htmlspecialchars(mysqli_real_escape_string($this->link, $data)));
	}
}